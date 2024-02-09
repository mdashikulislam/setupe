<?php
return [
    'id' => 'post',
    'folder' => 'core',
    'name' => 'Create a post',
    'author' => 'ocmws',
    'author_uri' => 'https://ocmws.com',
    'desc' => 'Customize system interface',
    'icon' => 'bx bx-edit',
    'color' => '#ff0000',
    'menu' => [
        'tab' => 1,
        'type' => 'top',
        'position' => 2000,
        'name' => 'Create a post'
    ],
    'js' => [
        "Assets/plugins/selectator/fm.selectator.jquery.js",
        "Assets/js/post.js"
    ],
    'css' => [
        "Assets/plugins/selectator/fm.selectator.jquery.css",
        "Assets/css/post.css"
    ],
    'cron' => [
        'name' => 'Composer',
        'uri' => 'post/cron',
        'style' => '* * * * *',
    ]
];