<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

class Autoload extends AutoloadConfig
{
    /*
    |--------------------------------------------------------------------------
    | Auto-Loader Configuration
    |--------------------------------------------------------------------------
    |
    | The AutoloadConfig class allows you to define the locations of Namespaces,
    | PSR-4 autoloading, classmap files, and helper functions that should be
    | loaded automatically when CodeIgniter starts.
    |
    */

    /**
     * Maps namespaces to their locations within the application.
     * These are used when Autoloading classes using PSR-4.
     *
     * @var array
     */
    public array $psr4 = [
        'App'          => APPPATH,         // The main application namespace
        'Config'       => APPPATH . 'Config',
        'CoreX\\Docs'  => APPPATH,         // Namespace for CoreX-Docs components
    ];

    /**
     * Classmap provides a map of class names and their exact file locations.
     * Used for files that are not PSR-4 compliant.
     *
     * @var array
     */
    public array $classmap = [];

    /**
     * Files to be automatically loaded on every request.
     * Used for including custom global functions, helper files, or utilities.
     *
     * @var array
     */
    public array $files = [];

    /**
     * Helper files to be automatically loaded.
     *
     * @var array
     */
    public array $helpers = ['url', 'form', 'text', 'security'];

}
