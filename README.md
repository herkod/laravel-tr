## Laravel 6, 7 ve 8 için Türkçe dil dosyaları
Laravel 6, Laravel 7, Laravel 8 dil dosyaları aynı olduğu için paketin `^v1.0` versiyonunu bu Laravel sürümlerinde kullanabilirsiniz.

### Kurulum

Aşağıdaki komutu kullanarak bu paketi composer ile projenize ekleyiniz.

```bash
composer require herkod/laravel-tr
```

Kurulum tamamlandığında dil dosyaları otomatik olarak `/resources/lang/tr/` dizini altına kopyalamak için aşağıdaki artisan komutunu kullanabilirsiniz. Eğer varlan dil dosyalarını güncellemek isterseniz komutun sonun `--force` parametresini ekleyebilirsiniz.
```bash
php artisan vendor:publish --tag=herkod-laravel-tr
```

### Manuel Kurulum
Paketi kurmadan da dil dosyalarını kullanabilirsiniz. Öncelikle [buradan repoyu indiriniz](https://github.com/herkod/laravel-tr/archive/master.zip). İndirdiğiniz zip'in içindeki `resources/lang/` içerisinde bulunan `tr` klasörünü projenizdeki `resources/lang/` altına kopyalayınız. Son hali aşağıdaki şekilde görünmelidir.

    Laravel Projesi
    ├── ...
    ├── resources
    │   ├── lang
    │   |  ├── en
    │   |  └── tr
    └── ...

### Laravel config Türkçe ayarı

Laravel projenizin dilini Türkçe'ye çevirmek için; `config/app.php` dosyasındaki, `locale` kısmındaki `en` ifadesini `tr` olarak değiştiriniz.

```php
'locale' => 'tr',
```

<br>
<br>
<p align="center">
  <a href="https://www.herkod.com"><img src="https://herkod.com/images/logo/logo.svg" width="250"></a>
</p>