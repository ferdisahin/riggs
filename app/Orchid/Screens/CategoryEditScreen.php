<?php

namespace App\Orchid\Screens;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;

class CategoryEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Kategoriyi Düzenle';
    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Category $category): array{
        $this->exists = $category->exists;

        if($this->exists){
            $this->name = 'Kategori Ekle';
        }

        return [
            'category' => $category
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Kategori Ekle')->icon('pencil')->method('createOrUpdate')->canSee(!$this->exists),
            Button::make('Kategoriyi Güncelle')->icon('note')->method('createOrUpdate')->canSee($this->exists),
            Button::make('Sil')->icon('trash')->confirm('Kategori içeriğinde bulunan yazılarda silinecektir. Onaylıyor musunuz?')->method('remove')->canSee($this->exists)
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array{
        return [
            Layout::rows([
                Input::make('category.title')->title('Başlık')->placeholder('Kategori Başlığı')->required(),
                Input::make('category.slug')->title('Kısa Bağlantı')->canSee($this->exists)->required(),
            ])
        ];
    }

    public function createOrUpdate(Category $category, Request $request){
        $category->fill($request->get('category'))->save();
        Alert::info('Kategori başarıyla oluşturuldu!');
        return redirect()->route('platform.category.list');
    }

    public function remove(Category $category){
        if($category->delete()){
            Post::where('cat_id', $category->id)->delete();
        }
        Alert::info('Kategori başarıyla silindi!');
        return redirect()->route('platform.category.list');
    }
}
