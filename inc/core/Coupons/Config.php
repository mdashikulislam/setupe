<?php
return [
    'id' => 'memberships',
    'folder' => 'core',
    'name' => 'Memberships',
    'author' => 'ocmws',
    'author_uri' => 'https://ocmws.com',
    'desc' => 'ocmws - Social Media Management & Analysis Platform',
    'icon' => 'fad fa-id-card-alt',
    'color' => '#e90a7b',
    'role' => 1,
    'menu' => [
        'tab' => 5,
        'type' => 'top',
        'position' => 1000,
        'name' => 'Memberships',
        'sub_menu' => [
            'position' => 1700,
            'id' => 'coupons',
            'name' => 'Coupons',
            'icon' => 'fad fa-percentage',
            'color' => '#fab005'
        ]
    ] 
];