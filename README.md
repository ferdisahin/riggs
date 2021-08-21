<p align="center"><img src="https://i.ibb.co/SdhZxbk/logo.png" width="200"></p>

# Riggs Hakkında

Herkese merhaba, Riggs yazılımını yaklaşık olarak 24 saatte (**Evet doğru duydunuz sabah 8:00'de başlayıp akşam 20:00'da bitirdim**) kendi sitem için yapmıştım. Ancak daha sonra açık kaynak kodlu olarak dağıtmaya karar verdim. Sürekli güncelleyip yenilikler getirmeyi düşünüyorum.

### Peki Güvenli mi?

Son derece güvenlidir, altyapısında Laravel kullanılmıştır. Ve ayrıca NoSQL yapıya sahiptir.

### Yazılım Özellikleri

- Temiz Admin Paneli
- NoSQL Yapı
- Hızlı ve Minimal Arayüz
- 2 dakikada kurulum

### Planlanan Gelecek Özellikler

- [ ] Yorum Yapma Alanı
- [ ] Sosyal Ağ Butonları
- [ ] Kod Alanı Paylaşımı (Gist) (🤯)
- [ ] Sitemap
- [ ] Menü Yönetimi

### Kurulum

Kurulum işlemi oldukça basittir. Dosyaları indirip hostinginize yükleyin.

Bu işlemden sonra .env.example dosyasının adını .env olarak değiştirin.

**.env** dosyasını düzenleme modunda açın ve **DB_CONNECTION=mysql** kısmını **DB_CONNECTION=sqlite** olarak değiştirin.

Ve altındaki bu bilgileri silin.

```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Bu işlemden sonra **APP_URL=http://localhost** kısmını bulun ve site adresiniz ile değiştirin. 

Bunu da yaptıktan sonra şimdi dosyayı kaydedip sitenizi açabilirsiniz.

### Kullanıcı Bilgileri

Sitenin yönetim paneline siteadı **/admin** ile erişebilirsiniz.

````
Kullanıcı adı: admin@admin.com
Şifre: 123456
````

### Katkıda Bulunmak

Yazılıma katkıda bulunmak isterseniz Fork'layıp Pull Request atabilirsiniz.

### Sorun Yaşıyorum

Script ile ilgili sorun yaşıyorsanız **Issues** alanından sorununuzu dile getirirseniz yardımcı olmaya çalışırım.
