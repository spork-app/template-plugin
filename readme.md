## __NAME__

__DESCRIPTION__

```
composer require __PACKAGE_NAME__
```

Publish your assets

```
php artisan vendor:publish --provider=__NAMESPACE__\\SporkServiceProvider
```

You'll need to run `artisan migrate` to ensure your database gets the new repeating events schema

Lastly, register the Service Provider in your Spork App's `config/app.php` file.
