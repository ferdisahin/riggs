<?php

namespace App\Orchid\Screens;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class PostEditScreen extends Screen{
    public $name = 'Yazıyı Düzenle';
    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Post $post): array{
        $this->exists = $post->exists;

        if($this->exists){
            $this->name = 'Yazı Ekle';
        }

        return [
            'post'  => $post
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
            Button::make('Yazı Ekle')->icon('pencil')->method('createOrUpdate')->canSee(!$this->exists),
            Button::make('Yazıyı Güncelle')->icon('note')->method('createOrUpdate')->canSee($this->exists),
            Button::make('Sil')->icon('trash')->method('remove')->canSee($this->exists)
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('post.title')->title('Başlık')->placeholder('Yazı Başlığı')->required(),
                Input::make('post.slug')->title('Kısa Bağlantı')->canSee($this->exists)->required(),
                //Quill::make('post.body')->title('İçerik'),
                SimpleMDE::make('post.body'),
                Relation::make('post.cat_id')->title('Kategori')->fromModel(Category::class, 'title')->required(),
                Picture::make('post.cover')->targetRelativeUrl(),
                Select::make('post.status')
                    ->options([
                        'publish'   => 'Yayında',
                        'draft' => 'Taslak',
                    ])
                    ->title('Yazı Durumu'),
                Select::make('post.show_home')
                    ->options([
                        'show'   => 'Göster',
                        'hide' => 'Gizle',
                    ])
                    ->title('Anasayfada Göster'),
            ])
        ];
    }

    /**
     * @param Post $post
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Post $post, Request $request){
        $post->fill($request->get('post'))->save();
        Alert::info('Yazı başarıyla oluşturuldu!');
        return redirect()->route('platform.post.list');
    }

    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Post $post){
        $post->delete();
        Alert::info('Yazı başarıyla silindi!');
        return redirect()->route('platform.post.list');
    }
}
