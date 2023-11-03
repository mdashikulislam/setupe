<?php
return [
    'id' => 'twitter_analytics',
    'folder' => 'core',
    'name' => 'Twitter analytics',
    'author' => 'ocmws',
    'author_uri' => 'https://ocmws.com',
    'desc' => 'ocmws - Social Media Management & Analysis Platform',
    'icon' => 'fab fa-twitter-square',
    'color' => '#00acee',
    'parent' => [
        "id" => "twitter",
        "name" => "Twitter"
    ],
    'cron' => [
        'name' => 'Twitter analytics',
        'uri' => 'rss_post/cron',
        'style' => '* * * * *',
    ]
];