<?php

declare(strict_types=1);

namespace Orchid\Screen;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Contracts\Fieldable;
use Orchid\Screen\Contracts\Groupable;
use Throwable;

class Builder
{
    /**
     * Fields to be reflected, in the form Field.
     *
     * @var Fieldable[]|mixed
     */
    public $fields;

    /**
     * Transmitted values for display in a form.
     *
     * @var Model|Repository
     */
    public $data;

    /**
     * The form language.
     *
     * @var string|null
     */
    public $language;

    /**
     * The form prefix.
     *
     * @var string|null
     */
    public $prefix;

    /**
     * HTML form string.
     *
     * @var string
     */
    private $form = '';

    /**
     * Builder constructor.
     *
     * @param Fieldable[]     $fields
     * @param Repository|null $data
     */
    public function __construct(array $fields, Repository $data = null)
    {
        $this->fields = $fields;
        $this->data = $data ?? new Repository();
    }

    /**
     * @param string|null $language
     *
     * @return $this
     */
    public function setLanguage(string $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @param string|null $prefix
     *
     * @return $this
     */
    public function setPrefix(string $prefix = null): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * Generate a ready-made html form for display to the user.
     *
     * @throws Throwable
     *
     * @return string
     */
    public function generateForm(): string
    {
        collect($this->fields)->each(function (Fieldable $field) {
            $this->form .= is_subclass_of($field, Groupable::class)
                ? $this->renderGroup($field)
                : $this->render($field);
        });

        return $this->form;
    }

    /**
     * @param Groupable $group
     *
     * @throws \Throwable
     *
     * @return array|string
     */
    private function renderGroup(Groupable $group)
    {
        $prepare = collect($group->getGroup())->map(function ($field) {
            return $this->render($field);
        })
            ->filter()
            ->toArray();

        return $group->setGroup($prepare)->render();
    }

    /**
     * Render field for forms.
     *
     * @param Fieldable $field
     *
     * @throws Throwable
     *
     * @return mixed
     */
    private function render(Fieldable $field)
    {
        $field->set('lang', $this->language);
        $field->set('prefix', $this->buildPrefix($field));

        foreach ($this->fill($field->getAttributes()) as $key => $value) {
            $field->set($key, $value);
        }

        return $field->render();
    }

    /**
     * @param Fieldable $field
     *
     * @return string|null
     */
    private function buildPrefix(Fieldable $field)
    {
        return $field->get('prefix', $this->prefix);
    }

    /**
     * @param array $attributes
     *
     * @return array
     */
    private function fill(array $attributes): array
    {
        $name = $attributes['name'];

        $bindValueName = rtrim($name, '.');
        $attributes['value'] = $this->getValue($bindValueName, $attributes['value'] ?? null);

        //set prefix
        if ($attributes['prefix'] !== null) {
            $name = '.'.$name;
        }

        $attributes['name'] = self::convertDotToArray($name);

        return $attributes;
    }

    /**
     * Gets value of Repository.
     *
     * @param string     $key
     * @param mixed|null $value
     *
     * @return mixed
     */
    private function getValue(string $key, $value = null)
    {
        if ($this->language !== null) {
            $key = $this->language.'.'.$key;
        }

        if ($this->prefix !== null) {
            $key = $this->prefix.'.'.$key;
        }

        $data = $this->data->getContent($key);

        // default value
        if ($data === null) {
            return $value;
        }

        if ($value instanceof Closure) {
            return $value($data, $this->data);
        }

        return $data;
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public static function convertDotToArray(string $string): string
    {
        $name = '';
        $binding = explode('.', $string);

        foreach ($binding as $key => $bind) {
            $name .= $key === 0 ? $bind : '['.$bind.']';
        }

        return $name;
    }
}
