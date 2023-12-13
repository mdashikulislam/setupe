<?php
return [
    'id' => 'ai-tools',
    'folder' => 'core',
    'name' => 'Ai Tools',
    'author' => 'ocmws',
    'author_uri' => 'https://ocmws.com',
    'desc' => 'Customize system interface',
    'icon' => 'bx bx-wrench',
    'color' => '#36d633',
    'menu' => [
        'tab' => 3,
        'type' => 'top',
        'position' => 1020,
        'name' => 'Ai Tools',
        'color' => '#36d633',
        'icon' => 'fad fa-comment-alt-lines',
        'sub_menu' => [
            'position' => 2000,
            'id' => 'templates',
            'name' => 'templates',
            'icon' => 'fad fa-comment-alt-lines',
            'color' => '#b303fb'
        ],
        'js'=>[
            'https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js',
            base_url('inc/core/Templates/Assets/js/function.js?t='.time())
        ]
    ]
];