<?php

namespace App\Orchid\Screens;

use App\Models\Category;
use App\Orchid\Layouts\CategoryListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CategoryListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Kategoriler';
    public $description = 'Kategori Listesi';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array{
        return [
            'categories'    => Category::paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array{
        return [
            Link::make('Yeni Oluştur')->icon('pencil')->route('platform.category.edit')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array{
        return [
            CategoryListLayout::class
        ];
    }
}
