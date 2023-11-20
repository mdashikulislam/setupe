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
        'color' => '#36d633',
        'icon' => 'fad fa-comment-alt-lines',
        'sub_menu' => [
            'position' => 2000,
            'id' => 'caption',
            'name' => 'Caption',
            'icon' => 'fad fa-comment-alt-lines',
            'color' => '#b303fb'
        ]
    ],
    "js" => [
        'Assets/js/caption.js',
        'Assets/plugins/emojionearea/emojionearea.min.js'
    ],
    "css" => [
        'Assets/css/caption.css',
        'Assets/plugins/emojionearea/emojionearea.min.css'
    ]
];