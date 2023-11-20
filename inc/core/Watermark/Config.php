<?php
return [
    'id' => 'tools',
    'folder' => 'core',
    'name' => 'Tools',
    'author' => 'ocmws',
    'author_uri' => 'https://ocmws.com',
    'desc' => 'Customize system interface',
    'icon' => 'bx bx-wrench',
    'color' => '#36d633',
    'menu' => [
        'tab' => 3,
        'type' => 'top',
        'position' => 1020,
        'name' => 'Tools',
        'icon' => 'fad fa-medal',
        'sub_menu' => [
            'position' => 1500,
            'id' => 'watermark',
            'name' => 'Watermark',
            'icon' => 'fad fa-medal',
            'color' => '#0014ff',
        ]
    ],
    "js" => [
        'Assets/plugins/ion.rangeSlider/js/ion.rangeSlider.min.js',
        'Assets/js/watermark.js',
    ],
    "css" => [
        'Assets/plugins/ion.rangeSlider/css/ion.rangeSlider.min.css',
        'Assets/css/watermark.css',
    ]
];