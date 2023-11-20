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
        'icon' => 'fad fa-users',
        'sub_menu' => [
            'position' => 1900,
            'id' => 'group_manager',
            'name' => 'Group manager',
            'icon' => 'fad fa-users',
            'color' => '#ffa500',
        ]
    ]
];