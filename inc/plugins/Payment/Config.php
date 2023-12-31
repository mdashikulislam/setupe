<?php
return [
    'id' => 'payment',
    'folder' => 'plugins',
    'name' => 'Payment',
    'author' => 'ocmws',
    'author_uri' => 'sp',
    'desc' => 'Customize system interface',
    'icon' => 'fad fa-credit-card',
    'color' => '#b3e200',
    'login_required' => false,
     'cron' => [
        'name' => 'Email Renewal reminders',
        'uri' => 'payment/cron',
        'style' => '* * * * *',
    ]
];