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
        'title' => 'Sukses',
        'message' => 'OK',
    ],
    '201' => [
        'code' => '201',
        'title' => 'Sukses',
        'message' => 'Disimpan',
    ],

    /**
     * 4xx Client errors
     */
    '400' => [
        'code' => '400',
        'title' => 'Ups!!',
        'message' => 'invalid request, Server tidak dapat memproses request dari client',
    ],
    '401' => [
        'code' => '401',
        'title' => 'Ups!!',
        'message' => 'Tidak ada otorisasi',
    ],
    '403' => [
        'code' => '403',
        'title' => 'Ups!!',
        'message' => 'Akses dilarang',
    ],
    '404' => [
        'code' => '404',
        'title' => 'Ups!!',
        'message' => 'Tidak ditemukan',
    ],
    '409' => [
        'code' => '409',
        'title' => 'Ups!!',
        'message' => 'Conflict, Server tidak dapat memproses request dari client karena konflik data',
    ],
    '422' => [
        'code' => '422',
        'title' => 'Ups!!',
        'message' => 'Tidak bisa diproses. Harap cek lagi.',
    ],
    '424' => [
        'code' => '424',
        'title' => 'Ups!!',
        'message' => '3rd party service error, Server tidak dapat memproses request dari client',
    ],
    '451' => [
        'code' => '451',
        'title' => 'Ups!!',
        'message' => 'Halaman ini tidak tersedia karena alasan hukum',
    ],

    /**
     * 5xx Server errors
     */
    '500' => [
        'code' => '500',
        'title' => 'Ups!! Terjadi Kendala Teknis',
        'message' => 'Kami telah menerima laporan bahwa layanan ini sedang mengalami gangguan. Mohon maaf atas ketidaknyamanannya dan mohon menunggu sebentar.',
    ],
    '503' => [
        'code' => '503',
        'title' => 'Ups!! Terjadi Kendala Teknis',
        'message' => 'Kami telah menerima laporan bahwa layanan ini sedang mengalami gangguan. Mohon maaf atas ketidaknyamanannya dan mohon menunggu sebentar.',
    ],

];
