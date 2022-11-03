<?php

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/Database/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/Database/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => 'quiron.cw8shvr00rsd.sa-east-1.rds.amazonaws.com',
            'user' => 'quironadm',
            'pass' => 'Quiron2022TCC*',
            'charset' => 'utf8',
            'name' => 'DB_QUIRON',
        ],

        'development' => [
            'adapter' => 'mysql',
            'host' => 'quiron.cw8shvr00rsd.sa-east-1.rds.amazonaws.com',
            'user' => 'quironadm',
            'pass' => 'Quiron2022TCC*',
            'charset' => 'utf8',
            'name' => 'DB_QUIRON',
        ],

        'testing' => [
            'adapter' => 'mysql',
            'host' => 'quiron.cw8shvr00rsd.sa-east-1.rds.amazonaws.com',
            'user' => 'quironadm',
            'pass' => '',
            'charset' => 'utf8',
            'name' => 'DB_QUIRON',
        ]
    ],
    'version_order' => 'creation'
];
