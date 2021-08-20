<?php

namespace App\Orchid\Screens;

use App\Models\Setting;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Code;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SettingScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Ayarlar';
    public $description = 'Ayarları buradan düzenleyebilirsiniz.';
    public $id = 1;
    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Setting $setting): array{
        $this->exists = true;

        return [
            'setting'   => $setting->where('id', $this->id)->first()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array{
        return [
            Button::make('Ayarları Güncelle')->icon('pencil')->method('save')
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
                Input::make('setting.sitename')->title('Site Adı')->required(),
                Input::make('setting.sitedesc')->title('Site Açıklaması')->required(),
                Input::make('setting.about')->title('Hakkımda')->required(),
                Picture::make('setting.logo')->targetRelativeUrl(),
                Picture::make('setting.favicon')->targetRelativeUrl(),
                Code::make('setting.head')->lineNumbers()
            ])
        ];
    }

    /**
     * @param Request $request
     * @param Setting $setting
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request, Setting $setting){
        if(Setting::find($this->id)){
            $sett = Setting::find($this->id);
        }else{
            $sett = new Setting();
        }
        $sett->sitename = $request->setting['sitename'];
        $sett->sitedesc = $request->setting['sitedesc'];
        $sett->about = $request->setting['about'];
        $sett->logo = $request->setting['logo'];
        $sett->favicon = $request->setting['favicon'];
        $sett->head = $request->setting['head'];
        $sett->save();
        Toast::info('Ayarlar başarıyla kaydedildi!');
        return back();
    }
}
