<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'     => \CodeIgniter\Filters\CSRF::class,
        'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
        'adminAuth' => \App\Filters\AdminAuth::class, // Custom admin authentication filter
    ];

    public $globals = [
        'before' => [
            'csrf', // CSRF protection enabled for all requests
        ],
        'after' => [
            'toolbar', // Debug toolbar enabled
        ],
    ];

    public $methods = [];

    public $filters = [
        'adminAuth' => ['before' => ['admin/*']], // Protects all admin routes
    ];
}
