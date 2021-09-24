<?php

use App\PointHistory;
use App\Program;
use App\Subscription;

return [

    'tz' => 'Europe/Moscow',

    'page' => [
        'size' => 20,
    ],

    'age' => [
        'min' => 18
    ],

    'code' => [
        'resend' => 30,
    ],

    'media' => [
        'mimes' => 'jpg,png,heic,mp4,avi,mov,m4a,ogg',
        'maxsize' => 3000000, // 3 gb
    ],

    'pricing' => [
        'allow_paid_posts_for_paid_accounts' => true
    ],

    'avatar' => [
        'filesize' => '20000',
        'resize' => '400x400',
    ],

    'screenshot' => [
        'resize' => '1280x720',
    ],
];