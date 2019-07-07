<?php

return [
    'name' => 'Neigh Energy',
    'manifest' => [
        'name' => env('APP_NAME', 'Neigh Energy'),
        'short_name' => 'Neigh',
        'start_url' => '/',
        'background_color' => '#f9f4ad',
        'theme_color' => '#343a40',
        'display' => 'standalone',
        'orientation'=> 'any',
        //added
        'description'=> 'A renewable energy project company that specialises in solar energy deployment.',
        'dir'=>'ltr',                
        'lang'=>'en-US',
        'scope'=> '.', 
        'icons' => [
           // '72x72' => '/images/icons/icon-72x72.png',
           '48x48' => '/images/icons/icon-48x48.png',
            '96x96' => '/images/icons/icon-96x96.png',
           // '128x128' => '/images/icons/icon-128x128.png',
            '144x144' => '/images/icons/icon-144x144.png',
            //'152x152' => '/images/icons/icon-152x152.png',
            '192x192' => '/images/icons/icon-192x192.png',
            '256x256' => '/images/icons/icon-256x256.png',
            '384x384' => '/images/icons/icon-384x384.png',
            '512x512' => '/images/icons/icon-512x512.png'
        ],
      
        'custom' => []
    ]
];
