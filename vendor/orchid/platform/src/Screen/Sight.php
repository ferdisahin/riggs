<?php

declare(strict_types=1);

namespace Orchid\Screen;

use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;

class Sight extends Cell
{
    /**
     * Builds a column heading.
     *
     * @return Factory|View
     */
    public function buildDt()
    {
        return view('platform::partials.layouts.dt', [
            'column'       => $this->column,
            'title'        => $this->title,
            'popover'      => $this->popover,
        ]);
    }

    /**
     * Builds content for the column.
     *
     * @param Repository|Model $repository
     *
     * @return string|null
     */
    public function buildDd($repository): ?string
    {
        $value = $this->render
            ? $this->handler($repository)
            : $repository->getContent($this->name);

        return $this->render === null
            ? e($value)
            : $value;
    }
}
