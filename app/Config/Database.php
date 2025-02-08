<?php

namespace Config;

use CodeIgniter\Database\Config;

class Database extends Config
{
    /**
     * The default database connection group to use.
     *
     * @var string
     */
    public string $defaultGroup = 'default';

    /**
     * Database connection settings.
     */
    public array $default = [
        'DSN'          => '',
        'hostname'     => getenv('DB_HOST') ?: 'localhost',
        'username'     => getenv('DB_USER') ?: 'root',
        'password'     => getenv('DB_PASS') ?: '',
        'database'     => getenv('DB_NAME') ?: 'corex_docs',
        'DBDriver'     => 'MySQLi',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => getenv('CI_ENVIRONMENT') === 'development',
        'charset'      => 'utf8mb4',
        'DBCollat'     => 'utf8mb4_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
        'foundRows'    => false,
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];

    /**
     * Migration table settings.
     */
    public array $Migrations = [
        'table' => 'migrations',
        'timestampFormat' => 'Y-m-d H:i:s',
    ];

    /**
     * Used for unit testing database connection.
     */
    public array $tests = [
        'DSN'          => '',
        'hostname'     => getenv('DB_HOST_TEST') ?: 'localhost',
        'username'     => getenv('DB_USER_TEST') ?: 'root',
        'password'     => getenv('DB_PASS_TEST') ?: '',
        'database'     => getenv('DB_NAME_TEST') ?: 'corex_docs_test',
        'DBDriver'     => 'MySQLi',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => getenv('CI_ENVIRONMENT') === 'development',
        'charset'      => 'utf8mb4',
        'DBCollat'     => 'utf8mb4_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
        'foundRows'    => false,
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ];
];
}