<?php

namespace App\Orchid\Screens;

use App\Models\Page;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class PageEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Sayfayı Düzenle';
    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Page $page): array{
        $this->exists = $page->exists;

        if($this->exists){
            $this->name = 'Sayfa Ekle';
        }

        return [
            'page'  => $page
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array{
        return [
            Button::make('Sayfa Ekle')->icon('pencil')->method('createOrUpdate')->canSee(!$this->exists),
            Button::make('Sayfayı Güncelle')->icon('note')->method('createOrUpdate')->canSee($this->exists),
            Button::make('Sil')->icon('trash')->method('remove')->canSee($this->exists)
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
                Input::make('page.title')->title('Başlık')->placeholder('Sayfa Başlığı')->required(),
                Input::make('page.slug')->title('Kısa Bağlantı')->canSee($this->exists)->required(),
                Quill::make('page.body')->title('İçerik'),
            ])
        ];
    }

    public function createOrUpdate(Page $page, Request $request){
        $page->fill($request->get('page'))->save();
        Alert::info('Sayfa başarıyla oluşturuldu!');
        return redirect()->route('platform.page.list');
    }

    public function remove(Page $page){
        $page->delete();
        Alert::info('Sayfa başarıyla silindi!');
        return redirect()->route('platform.page.list');
    }
}
