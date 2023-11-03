<?php
return [
    'id' => 'tiktok_profiles',
    'folder' => 'core',
    'name' => 'Tiktok profiles',
    'author' => 'ocmws',
    'author_uri' => 'https://ocmws.com',
    'desc' => 'Customize system interface',
    'icon' => 'fab fa-tiktok',
    'color' => '#010101',
    'position' => '800',
    'parent' => [
        "id" => "tiktok",
        "name" => "Tiktok"
    ],
    "js" => [
        'Assets/js/tiktok_profiles.js'
    ],
];