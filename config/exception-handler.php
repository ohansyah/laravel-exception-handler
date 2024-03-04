<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Trace Exception
    |--------------------------------------------------------------------------
    |
    | This key is used to determine whether the exception response is displayed
    | or not. If the value is true, the exception response will be displayed.
    | Otherwise, the exception response will not be displayed.
    |
     */

    'trace_exception' => env('SERVICE_TRACE_EXCEPTION', true),

    /*
    |--------------------------------------------------------------------------
    | Debug Routes
    |--------------------------------------------------------------------------
    |
    | This key is used to determine whether the debug routes are displayed
    | or not. If the value is true, the debug routes will be displayed.
    | Otherwise, the debug routes will not be displayed.
    |
     */
    'debug_routes' => env('APP_DEBUG', true),
];
