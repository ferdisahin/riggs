<?php

namespace App\Orchid\Layouts;

use App\Models\Page;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PageListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'pages';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array{
        return [
            TD::make('title', 'Başlık')
                ->render(function (Page $page) {
                    return Link::make($page->title)
                        ->route('platform.page.edit', $page);
                }),
            TD::make('slug', 'Kısa Bağlantı'),
        ];
    }
}
