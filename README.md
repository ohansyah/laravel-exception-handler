# Laravel Exception Handler

## Introduction
Laravel API Exception Handler with readable error messages.
However, this package is specifically designed to be compatible with older PHP versions and Laravel or Lumen legacy projects.

## Installation
```
composer require ohansyah/laravel-exception-handler
```

#### Publish Config and Lang
```
php artisan exception-handler:publish
```

#### Register Service Provider
```
$app->register(Ohansyah\ExceptionHandler\ExceptionHandlerServiceProvider::class);
```

#### Register Config
```
$app->configure('exception-handler');
```

## Usage
To default handle any exception
```
// app\Exceptions\Handler.php
if (!($exception instanceof ValidationException) && !($exception instanceof NotFoundHttpException)) {
    return $this->resException($exception);
}
```

#### Sample Usage
```
Request:
GET {{your-base-url}}/exception-handler/error?code=500

Response:
{
    "status": "error",
    "message": "Kami telah menerima laporan bahwa layanan ini sedang mengalami gangguan. Mohon maaf atas ketidaknyamanannya dan mohon menunggu sebentar.",
    "errors": {
        "message": [
            "Kami telah menerima laporan bahwa layanan ini sedang mengalami gangguan. Mohon maaf atas ketidaknyamanannya dan mohon menunggu sebentar."
        ]
    },
    "title": "Ups!! Terjadi Kendala Teknis",
    "exception": null
}
```

#### Available Error Code Translation
```
resources\lang\vendor
```


## License

The Laravel Benchmark package is open-sourced software licensed under the [MIT License](LICENSE.md).
