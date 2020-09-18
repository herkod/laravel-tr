## Laravel 8 Türkçe dil dosyaları

### Kurulum

Aşağıdaki komutu kullanarak bu paketi composer ile projenize ekleyiniz.

```bash
composer require herkod/laravel-tr
```

Kurulum tamamlandığında dil dosyaları otomatik olarak `/resources/lang/tr/` dizini altına kopyalamak için aşağıdaki artisan komutunu kullanabilirsiniz.
```bash
php artisan vendor:publish --tag=herkod-laravel-tr --force
```

Laravel projenizin dilini Türkçe'ye çevirmek için; `config/app.php` dosyasındaki, `locale` kısmındaki `en` ifadesini `tr` olarak değiştiriniz.

```php
'locale' => 'tr',
```

<br>
<br>
<br>
<center><a href="https://www.herkod.com"><img src="https://herkod.com/images/logo/logo.svg" width="300"></a></center>