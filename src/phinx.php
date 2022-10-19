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
            'adapter' => 'sqlite',
            'name' => './server',
            'suffix' => '.sqlite3',
            'user' => 'quirondb',
            'pass' => 'quiron2022tcc*',
            'host' => 'localhost',
        ],
        'development' => [
            'adapter' => 'sqlite',
            'name' => './server',
            'suffix' => '.sqlite3',
            'user' => 'quirondb',
            'pass' => 'quiron2022tcc*',
            'host' => 'localhost',
        ],
        'testing' => [
            'adapter' => 'sqlite',
            'name' => './server',
            'suffix' => '.sqlite3',
            'user' => 'quirondb',
            'pass' => 'quiron2022tcc*',
            'host' => 'localhost',
        ]
    ],
    'version_order' => 'creation'
];
