<?php
return [
    'id' => 'rss_post',
    'folder' => 'core',
    'name' => 'RSS Schedules',
    'author' => 'ocmws',
    'author_uri' => 'https://ocmws.com',
    'desc' => 'Customize system interface',
    'icon' => 'bx bx-rss',
    'color' => '#ff5e00',
    'menu' => [
        'tab' => 1,
        'type' => 'top',
        'position' => 1200,
        'name' => 'RSS Schedules'
    ],
    'js' => [
        "Assets/js/rss_post.js"
    ],
    'css' => [
        "Assets/css/rss_post.css"
    ],
    'cron' => [
        'name' => 'RSS Schedules',
        'uri' => 'rss_post/cron',
        'style' => '* * * * *',
    ]
];