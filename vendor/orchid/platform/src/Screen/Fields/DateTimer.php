<?php

declare(strict_types=1);

namespace Orchid\Screen\Fields;

use Carbon\Carbon;
use Orchid\Screen\Field;

/**
 * Class DateTimer.
 *
 * @method DateTimer accesskey($value = true)
 * @method DateTimer autofocus($value = true)
 * @method DateTimer disabled($value = true)
 * @method DateTimer form($value = true)
 * @method DateTimer formaction($value = true)
 * @method DateTimer formenctype($value = true)
 * @method DateTimer formmethod($value = true)
 * @method DateTimer formnovalidate($value = true)
 * @method DateTimer formtarget($value = true)
 * @method DateTimer name(string $value = null)
 * @method DateTimer placeholder(string $value = null)
 * @method DateTimer readonly($value = true)
 * @method DateTimer required(bool $value = true)
 * @method DateTimer tabindex($value = true)
 * @method DateTimer value($value = true)
 * @method DateTimer help(string $value = null)
 * @method DateTimer popover(string $value = null)
 * @method DateTimer allowEmpty(bool $enabled = true)
 * @method DateTimer title(string $value = null)
 */
class DateTimer extends Field
{
    /**
     * @var string
     */
    protected $view = 'platform::fields.datetime';

    /**
     * Default attributes value.
     *
     * @var array
     */
    protected $attributes = [
        'class'                                 => 'form-control',
        'data-datetime-enable-time'             => 'false',
        'data-datetime-time-24hr'               => 'false',
        'data-datetime-allow-input'             => 'false',
        'data-datetime-date-format'             => 'Y-m-d H:i:S',
        'data-datetime-no-calendar'             => 'false',
        'data-datetime-minute-increment'        => 5,
        'data-datetime-hour-increment'          => 1,
        'data-datetime-static'                  => 'false',
        'data-datetime-disable-mobile'          => 'false',
        'data-datetime-inline'                  => 'false',
        'data-datetime-position'                => 'auto auto',
        'data-datetime-shorthand-current-month' => 'false',
        'data-datetime-show-months'             => 1,
        'allowEmpty'                            => false,
        'placeholder'                           => 'Select Date...',
    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    protected $inlineAttributes = [
        'accept',
        'accesskey',
        'autocomplete',
        'autofocus',
        'checked',
        'disabled',
        'form',
        'formaction',
        'formenctype',
        'formmethod',
        'formnovalidate',
        'formtarget',
        'name',
        'placeholder',
        'readonly',
        'required',
        'tabindex',
        'value',
        'data-datetime-enable-time',
        'data-datetime-time-24hr',
        'data-datetime-allow-input',
        'data-datetime-date-format',
        'data-datetime-no-calendar',
        'data-datetime-enable',
        'data-datetime-disable',
        'data-datetime-max-date',
        'data-datetime-min-date',
        'data-datetime-disable-mobile',
        'data-datetime-inline',
        'data-datetime-position',
        'data-datetime-shorthand-current-month',
        'data-datetime-show-months',
    ];

    /**
     * Enables time picker.
     *
     * @param bool $time
     *
     * @return self
     */
    public function enableTime(bool $time = true): self
    {
        $this->set('data-datetime-enable-time', var_export($time, true));

        return $this;
    }

    /**
     * Displays time picker in 24 hour mode without AM/PM selection when enabled.
     *
     * @param bool $time
     *
     * @return self
     */
    public function format24hr(bool $time = true): self
    {
        $this->set('data-datetime-time-24hr', var_export($time, true));

        return $this;
    }

    /**
     * Allows the user to enter a date directly input the input field.
     * By default, direct entry is disabled.
     *
     * @param bool $time
     *
     * @return self
     */
    public function allowInput(bool $time = true): self
    {
        $this->set('data-datetime-allow-input', var_export($time, true));

        return $this;
    }

    /**
     * A string of characters which are used
     * to define how the date will be displayed in the input box.
     *
     * @param string $format
     *
     * @return DateTimer
     */
    public function format(string $format): self
    {
        $this->set('data-datetime-date-format', $format);

        return $this;
    }

    /**
     * Sets format for transmission to the front values
     * If the argument is not passed, then the value specified
     * in the 'format' method will be taken
     *
     * @param string|null $format
     *
     * @return $this
     */
    public function serverFormat(?string $format = null): self
    {
        return $this->addBeforeRender(function () use ($format) {
            $value = $this->get('value');

            if ($value === null) {
                return;
            }

            if ($format === null) {
                $format = $this->get('data-datetime-date-format');
            }

            $this->set('value', Carbon::parse($value)->format($format));
        });
    }

    /**
     * Disable calendar for the field and show only time.
     *
     * @param bool $noCalendar
     *
     * @return $this
     */
    public function noCalendar(bool $noCalendar = true): self
    {
        $this->enableTime();
        $this->set('data-datetime-no-calendar', var_export($noCalendar, true));

        return $this;
    }

    /**
     * Adjusts the step for the minute input (incl. scrolling).
     *
     * @param int $increment
     *
     * @return $this
     */
    public function minuteIncrement(int $increment)
    {
        $this->set('data-datetime-minute-increment', $increment);

        return $this;
    }

    /**
     * Adjusts the step for the hour input (incl. scrolling).
     *
     * @param int $increment
     *
     * @return $this
     */
    public function hourIncrement(int $increment)
    {
        $this->set('data-datetime-hour-increment', $increment);

        return $this;
    }
    
    /**
     * Enable specific set of dates for selection
     *
     * ['2021-04-27', '2021-04-20']
     *
     * or ranges
     *
     * [
     *     ['from' => '2021-04-04', 'to' => '2021-04-10'],
     *     ['from' => '2021-04-25', 'to' => '2021-05-01'],
     *
     * ]
     *
     * @param array $dates
     *
     * @return $this
     */
    public function available(array $dates = []): self
    {
        $this->set('data-datetime-enable', json_encode($dates));

        return $this;
    }

    /**
     * Disable specific set of dates for selection
     *
     * ['2021-04-27', '2021-04-20']
     *
     * or ranges
     *
     * [
     *     ['from' => '2021-04-04', 'to' => '2021-04-10'],
     *     ['from' => '2021-04-25', 'to' => '2021-05-01'],
     *
     * ]
     *
     * @param array $dates
     *
     * @return $this
     */
    public function unavailable(array $dates = []): self
    {
        $this->set('data-datetime-disable', json_encode($dates));

        return $this;
    }

    /**
     * Allow selection of dates on or before specified date
     *
     * @param Carbon $date
     *
     * @return $this
     */
    public function max(Carbon $date): self
    {
        $format = $this->get('data-datetime-date-format');
        $this->set('data-datetime-max-date', $date->format($format));

        return $this;
    }
    
    /**
     * Allow selection of dates on or after specified date
     *
     * @param Carbon $date
     *
     * @return $this
     */
    public function min(Carbon $date): self
    {
        $format = $this->get('data-datetime-date-format');
        $this->set('data-datetime-min-date', $date->format($format));

        return $this;
    }
    
    /**
     * Show calendar week numbers
     *
     * @param bool $show
     *
     * @return $this
     */
    public function weekNumbers(bool $show = true): self
    {
        $this->set('data-datetime-week-numbers', var_export($show, true));

        return $this;
    }
    
    /**
     * Disable native mobile pickers in favour of calendar
     *
     * @param bool $disable
     *
     * @return $this
     */
    public function disableMobile(bool $disable = true): self
    {
        $this->set('data-datetime-disable-mobile', var_export($disable, true));

        return $this;
    }
    
    /**
     * Disable native mobile pickers in favour of calendar
     *
     * @param bool $inline
     *
     * @return $this
     */
    public function inline(bool $inline = true): self
    {
        $this->set('data-datetime-inline', var_export($inline, true));

        return $this;
    }

    /**
     * Show the month using the shorthand version (ie, Sep instead of September).
     *
     * @param bool $short
     *
     * @return $this
     */
    public function shorthandCurrentMonth(bool $short = true): self
    {
        $this->set('data-datetime-shorthand-current-month', var_export($short, true));

        return $this;
    }
    
    /**
     * The number of months to be shown at the same time when displaying the calendar.
     *
     * @param int $count
     *
     * @return $this
     */
    public function showMonths(int $count = 1): self
    {
        $this->set('data-datetime-show-months', $count);

        return $this;
    }

    /**
     * Where the calendar is rendered relative to the input vertically and horizontally.
     * In the format of "[vertical] [horizontal]". Vertical can be auto, above or below (required).
     * Horizontal can be left, center or right.
     *
     *  e.g. "above" or "auto center"
     *
     * Not used with inline()
     *
     * @param string $vertical
     * @param string $horizontal
     *
     * @return $this
     */
    public function position(string $vertical = 'auto', string $horizontal = 'auto'): self
    {
        $this->set('data-datetime-position', $vertical . ' ' . $horizontal);

        return $this;
    }
}
