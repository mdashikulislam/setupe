<?php
return [
    'id' => 'whatsapp_chatbot',
    'folder' => 'core',
    'name' => 'Chatbot',
    'author' => 'ocmws',
    'author_uri' => 'https://ocmws.com',
    'desc' => 'Communicate with users',
    'icon' => 'fad fa-user-robot',
    'color' => '#25d366',
    'parent' => [
        "id" => "features",
        "name" => "Features"
    ],
    "js" => [
        'Assets/whatsapp_chatbot.js',
    ],
];
