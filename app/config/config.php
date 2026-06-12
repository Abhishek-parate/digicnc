<?php

declare(strict_types=1);

return [
    'app' => [
        'name' => env_value('APP_NAME', 'Digi CNC'),
        'url' => env_value('APP_URL', ''),
        'environment' => env_value('APP_ENV', 'production'),
        'timezone' => 'Asia/Kolkata',
        'phone' => '+91 9766653376',
        'whatsapp' => '919766653376',
        'email' => 'info@digicncnagpur.com',
        'address' => 'Nagpur, Maharashtra, India',
        'ga_measurement_id' => env_value('GA_MEASUREMENT_ID', 'G-XXXXXXXXXX'),
        'gsc_verification' => env_value('GSC_VERIFICATION', 'replace-with-google-search-console-token'),
    ],
    'database' => [
        'host' => env_value('DB_HOST', '127.0.0.1'),
        'port' => env_value('DB_PORT', '3306'),
        'name' => env_value('DB_DATABASE', 'digicnc'),
        'username' => env_value('DB_USERNAME', 'root'),
        'password' => env_value('DB_PASSWORD', ''),
        'charset' => 'utf8mb4',
    ],
    'admin' => [
        'email' => env_value('ADMIN_EMAIL', 'admin@digicncnagpur.com'),
        'password_hash' => env_value('ADMIN_PASSWORD_HASH', '$2y$10$sYYGZJbL.IEPK57MEF6rt.GwTDBbqgrCvHKmRqWZvPVi1aSCdV/cG'),
    ],
];
