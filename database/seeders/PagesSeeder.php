<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $pages = array(
            array('id' => '3','title' => 'Hakkımda','slug' => 'hakkimda','content' => '<p>Merhaba, ben Ferdi. Yaklaşık olarak 10 yıldır <strong>Frontend Developer</strong> olarak çalışmaktayım. İlk başta hobi olarak başladığım bu iş, benim gelir kaynağım oldu. Daha sonra kendi blogumu yapmak istedim ve 2018 yılıında PHP\'yi öğrendim. 2021 yılının başlarında ise Laravel\'ı öğrenerek ikinci bir işimi de elime almış oldum.&nbsp;</p><p>Şimdi hem <strong>Frontend</strong> hem de <strong>Backend</strong> işleri yapıyorum. İşimi severek yapıyorum, hatta her sabah yeni bir şeyleri öğrenmek için bilgisayar başına geçerim. O gün boş durmamak için yeni şeyler araştırırım.&nbsp;</p><p>Bilenler bilir bu işte pes eden çok kişi olmuştur. Ben ise hep şunu söylerim, sorun yaşadığınız ya da takıldığınız bir yerde pes etmek yerine çözümü araştırırsanız o işi öğrenmiş olursunuz. İşte benim şu anki noktaya gelmemin sebebi böyle oldu. Pes etmiş olsaydım ne Frontend tarafını ne de Backend tarafını öğrenebilirdim.&nbsp;</p><p>Umarım siz de hiçbir zaman PES etmezsiniz ve her zaman sonuca ulaşırsınız.</p>','status' => 'publish','created_at' => '2021-06-29 19:35:05','updated_at' => '2021-06-29 19:35:05'),
            array('id' => '4','title' => 'İletişim','slug' => 'iletisim','content' => '<p>Merhaba, benimle çalışmak isterseniz aşağıdaki e-posta adresimden iletişime geçebilirsiniz.</p><p><a href="mailto:ferdisahin@mail.com"><strong>ferdisahin@mail.com</strong></a></p><p><strong>Yapabileceğim İşler:</strong></p><p>PSD to HTML</p><p>Sketch to HTML</p><p>XD to HTML</p><p>Figma to HTML</p><p>Zeplin to HTML</p><p>PSD, Sketch,XD,Figma,Zeplin to Wordpress</p><p>HTML to Wordpress</p><p>PSD, Sketch,XD,Figma,Zeplin to Laravel</p><p>HTML to Laravel</p>','status' => 'publish','created_at' => '2021-06-29 19:37:59','updated_at' => '2021-06-29 19:38:51')
        );

        foreach ($pages as $page) {
            Page::create([
                'title' => $page['title'],
                'slug'  => $page['slug'],
                'body'  => $page['content']
            ]);
        }
    }
}
