<?php

namespace App\Orchid\Layouts;

use App\Models\Category;
use App\Models\Post;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'posts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('title', 'Başlık')
                ->render(function (Post $post) {
                    return Link::make($post->title)
                        ->route('platform.post.edit', $post);
                }),
            TD::make('slug', 'Kısa Bağlantı'),
            TD::make('cat_id', 'Kategori')->render(function (Post $post){
                return $post->category->title;
            })
        ];
    }
}
