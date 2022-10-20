<?php

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/server/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/server/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'user' => 'quirondb',
            'pass' => 'quiron2022tcc*',
            'charset' => 'utf8',
            'name' => 'DB_QUIRON',
        ],

        'development' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'user' => 'quirondb',
            'pass' => 'quiron2022tcc*',
            'charset' => 'utf8',
            'name' => 'DB_QUIRON',
        ],

        'testing' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'user' => 'root',
            'pass' => '',
            'charset' => 'utf8',
            'name' => 'DB_QUIRON',
        ]
    ],
    'version_order' => 'creation'
];
