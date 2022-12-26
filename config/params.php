<?php

return [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'frontend' => "http://drodo/",
    'bsVersion' => '4.x',
    'user_status' => [
        99 => 'ADMIN',
        1 => 'USER',
    ],
    'managersTelegramIds' => [
        '1530388119',
        '1614306105'
    ],
    'orderStatuses' => [
        1 => 'Проверка...',
        2 => 'Ожидается оплата',
        3 => 'Оплаченный',
        4 => 'В процессе доставки...',
        5 => 'Доставленный',
        6 => 'Отменено',
    ]
];
