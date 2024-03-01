<?php

namespace Ohansyah\ExceptionHandler\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ohansyah\ExceptionHandler\Traits\ResponseTransform;

class ErrorController extends Controller
{
    use ResponseTransform;

    public function getError(Request $request)
    {
        $code = $request->code;
        $title = $title = __("EH::http.$code.title");
        $message = __("EH::http.$code.message");
        $exception = null;

        if (in_array($code, [200, 201])) {
            return $this->resSuccess($message, $code, [
                'title' => $title,
            ]);
        }

        return $this->resError($message, $code, [
            'title' => $title,
            'exception' => $exception,
        ]);
    }
}
