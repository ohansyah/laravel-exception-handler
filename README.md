# Laravel Exception Handler

## Introduction
Laravel API Exception Handler with readable error messages.
However, this package is specifically designed to be compatible with older PHP versions and Laravel or Lumen legacy projects.

## Installation
```
composer require ohansyah/laravel-exception-handler
```

#### Register Service Provider
```
$app->register(Ohansyah\ExceptionHandler\ExceptionHandlerServiceProvider::class);
```

#### Register Config
```
$app->configure('exception-handler');
```

#### Refreshing
```
composer dump-autoload
```

#### Publish Config and Lang
```
php artisan exception-handler:publish
```

## Usage
use the Traits and simpy using available method resException(), resError(), resSuccess()
```
use Ohansyah\ExceptionHandler\Traits\ResponseTransform;

class Name 
{
    use ResponseTransform;
    ...
    resException(Exception $exception);
    resError($responseMessage, int $responseCode = 400, array $additionals = []);
    resSuccess($responseMessage, int $responseCode = 200);
}
```

#### Global Exception Handler
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

#### Translation
```
resources\lang\en\http.php
resources\lang\id\http.php
```

#### Config
```
// config\exception-handler.php

'trace_exception' => env('SERVICE_TRACE_EXCEPTION', true),
```

## License
The Laravel Exception Handler package is open-sourced software licensed under the [MIT License](LICENSE.md).
