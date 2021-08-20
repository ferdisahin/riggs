<?php

declare(strict_types=1);

namespace Orchid\Platform\Http\Layouts;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Repository;
use Orchid\Support\Facades\Dashboard;
use Throwable;

class SearchLayout extends Rows
{
    /**
     * @param Repository $query
     *
     * @return bool
     */
    public function isSee(): bool
    {
        return Dashboard::getSearch()->isNotEmpty();
    }

    /**
     * @throws Throwable
     *
     * @return array
     */
    public function fields(): array
    {
        $searchModel = $this->query->get('model');

        $layouts = Dashboard::getSearch()
            ->map(static function (Model $model) use ($searchModel) {
                $radio = Radio::make('type')
                    ->value(get_class($model))
                    ->horizontal()
                    ->clear()
                    ->placeholder($model->presenter()->label());

                if ($model instanceof $searchModel) {
                    $radio->checked();
                }

                return $radio;
            });

        $layouts->prepend(Label::make('search')->clear()->title(__('Choose record type:')));

        return [
            Group::make($layouts->all())->autoWidth(),
        ];
    }
}
