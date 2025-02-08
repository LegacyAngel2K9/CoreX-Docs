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
        'DSN'      => '',
        'hostname' => getenv('DB_HOST') ?: 'localhost',
        'username' => getenv('DB_USER') ?: 'root',
        'password' => getenv('DB_PASS') ?: '',
        'database' => getenv('DB_NAME') ?: 'corex_docs',
        'DBDriver' => 'MySQLi',  // Change to 'Postgre' if using PostgreSQL
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug'  => getenv('CI_ENVIRONMENT') === 'development',
        'cacheOn'  => false,
        'cacheDir' => '',
        'charset'  => 'utf8mb4',
        'DBCollat' => 'utf8mb4_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 3306,
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
        'DSN'      => '',
        'hostname' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'database' => 'test_corex_docs',
        'DBDriver' => 'MySQLi',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug'  => false,
        'cacheOn'  => false,
        'cacheDir' => '',
        'charset'  => 'utf8mb4',
        'DBCollat' => 'utf8mb4_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 3306,
    ];
}
