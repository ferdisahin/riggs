<?php

declare(strict_types=1);

namespace Orchid\Platform\Http\Screens;

use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Orchid\Platform\Http\Layouts\SearchLayout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Contracts\Searchable;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Dashboard;
use Orchid\Support\Facades\Layout;

class SearchScreen extends Screen
{
    public const SESSION_NAME = 'orchid_search_type';

    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Searching results';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description;

    /**
     * Count of items found.
     *
     * @var int
     */
    private $total = 0;

    /**
     * Query data.
     *
     * @param string $query
     *
     * @return array
     */
    public function query(string $query): array
    {
        $this->description = __('On request: :query', [
            'query' => $query,
        ]);

        $searchModels = Dashboard::getSearch();

        $model = $this->getSearchModel($searchModels);

        /** @var LengthAwarePaginator $results */
        $results = $model->presenter()->searchQuery($query)->paginate();

        $results->getCollection()
            ->transform(static function (Model $model) {
                return $model->presenter();
            });

        return [
            'query'   => $query,
            'model'   => $model,
            'results' => $results,
            'total'   => $results->total(),
        ];
    }

    /**
     * @return array
     */
    public function commandBar(): array
    {
        return [
            Button::make(__('Apply'))
                ->icon('filter')
                ->canSee(Dashboard::getSearch()->count() > 1)
                ->method('changeSearchType'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::wrapper('platform::partials.result', [
                'radios' => SearchLayout::class,
            ]),
        ];
    }

    /**
     * @param Request $request
     */
    public function changeSearchType(Request $request)
    {
        $type = $request->get('type');

        $request->session()->put(self::SESSION_NAME, $type);
    }

    /**
     * @param string|null $query
     *
     * @return Factory|View
     */
    public function compact(string $query = null)
    {

        /** @var Searchable[] $results */
        $results = Dashboard::getSearch()
            ->transform(function (Model $model) use ($query) {

                /** @var Searchable $presenter */
                $presenter = optional($model)->presenter();

                throw_unless(is_a($presenter, Searchable::class),
                   "The presenter must have an interface 'Orchid\Screen\Contracts\Searchable'
                        for model ".get_class($model));

                $label = $presenter->label();

                /** @var LengthAwarePaginator $result */
                $result = $presenter->searchQuery($query)
                    ->paginate($presenter->perSearchShow());

                $result->getCollection()
                    ->transform(static function (Model $model) {
                        return $model->presenter();
                    });

                if ($result->isEmpty()) {
                    return;
                }

                $this->total += $result->total();

                return compact('label', 'result');
            })
            ->filter();

        return view('platform::partials.result-compact', [
            'results' => $results,
            'total'   => $this->total,
            'query'   => $query,
        ]);
    }

    /**
     * @param Collection $searchModels
     *
     * @return mixed
     */
    private function getSearchModel(Collection $searchModels)
    {
        $class = get_class($searchModels->first());
        $type = session()->get(self::SESSION_NAME, $class);

        $model = $searchModels->filter(static function ($model) use ($type) {
            return $model instanceof $type;
        })->first();

        abort_if($model === null, 404, 'Required search type not found');

        return $model;
    }
}
