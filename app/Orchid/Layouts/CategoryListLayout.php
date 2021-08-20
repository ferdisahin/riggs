<?php

namespace App\Orchid\Layouts;

use App\Models\Category;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoryListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array{
        return [
            TD::make('title', 'Başlık')
                ->render(function (Category $category) {
                    return Link::make($category->title)
                        ->route('platform.category.edit', $category);
                }),
            TD::make('slug', 'Kısa Bağlantı'),
            TD::make('posts', 'Toplam Yazı')->render(function (Category $category){
                return $category->posts->count();
            })
        ];
    }
}
