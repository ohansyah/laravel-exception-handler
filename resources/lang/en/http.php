<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Error Language Lines
    |--------------------------------------------------------------------------
    |
    | Reference: https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
    |
    */

    /**
     * 2xx Success
     */
    '200' => [
        'code' => '200',
        'title' => 'Success',
        'message' => 'OK',
    ],
    '201' => [
        'code' => '201',
        'title' => 'Success',
        'message' => 'Created',
    ],

    /**
     * 4xx Client errors
     */
    '400' => [
        'code' => '400',
        'title' => 'Ups!!',
        'message' => 'Bad Request',
    ],
    '401' => [
        'code' => '401',
        'title' => 'Ups!!',
        'message' => 'Unauthorized',
    ],
    '403' => [
        'code' => '403',
        'title' => 'Ups!!',
        'message' => 'Forbidden',
    ],
    '404' => [
        'code' => '404',
        'title' => 'Ups!!',
        'message' => 'Not Found',
    ],
    '409' => [
        'code' => '409',
        'title' => 'Ups!!',
        'message' => 'Conflict',
    ],
    '422' => [
        'code' => '422',
        'title' => 'Ups!!',
        'message' => 'Unprocessable Entity',
    ],
    '424' => [
        'code' => '424',
        'title' => 'Ups!!',
        'message' => 'Failed Dependency',
    ],
    '451' => [
        'code' => '451',
        'title' => 'Ups!!',
        'message' => 'Unavailable For Legal Reasons',
    ],

    /**
     * 5xx Server errors
     */
    '500' => [
        'code' => '500',
        'title' => 'Ups!! Something Went Wrong',
        'message' => 'We have received reports that this service is experiencing disruption. Sorry for the inconvenience and please wait a moment',
    ],
    '503' => [
        'code' => '503',
        'title' => 'Ups!! Something Went Wrong',
        'message' => 'We have received reports that this service is experiencing disruption. Sorry for the inconvenience and please wait a moment',
    ],

];
