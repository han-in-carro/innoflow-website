<?php

return [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',

    'db' => [
        'connection' => $_ENV['DB_CONNECTION'],
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'],
        'name' => $_ENV['DB_NAME'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
    ],

    'reCAPTCHA.siteKey' => $_ENV['GOOGLE_RECAPTCHA_SITE_KEY'],
    'reCAPTCHA.secretKey' => $_ENV['GOOGLE_RECAPTCHA_SECRET_KEY'],
];

