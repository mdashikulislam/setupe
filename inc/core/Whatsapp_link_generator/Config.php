<?php
return [
    'id' => 'whatsapp_link_generator',
    'folder' => 'core',
    'name' => 'Link Generator',
    'author' => 'ocmws',
    'author_uri' => 'https://ocmws.com',
    'desc' => 'Create QR ond links for WhatsApp',
    'icon' => 'fad fa-qrcode',
    'color' => '#25d366',
    'parent' => [
        "id" => "features",
        "name" => "Features"
    ],
    "js" => [
        'Assets/plugins/jquery.qrcode/jquery_qr.min.js',
        'Assets/plugins/clipboard/clipboard.js'
    ],
];
