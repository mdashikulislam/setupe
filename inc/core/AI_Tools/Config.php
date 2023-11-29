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
        'name' => 'Ai-tools',
        'color' => '#36d633',
        'icon' => 'fad fa-comment-alt-lines',
        'sub_menu' => [
            'position' => 2000,
            'id' => 'ai_tools/template',
            'name' => 'template',
            'icon' => 'fad fa-comment-alt-lines',
            'color' => '#b303fb'
        ]
    ]
];