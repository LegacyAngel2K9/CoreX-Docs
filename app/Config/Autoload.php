<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Autoload extends BaseConfig
{
    /**
     * A list of namespaces that will be automatically loaded.
     *
     * @var array
     */
    public $psr4 = [
        // The default namespaces
        'Config'      => APPPATH . 'Config',       // config folder
        'App'         => APPPATH . 'Controllers',  // controllers folder
        'CoreX\Docs'  => APPPATH . 'CoreX/Docs',   // custom namespace for CoreX-Docs
        'CodeIgniter' => SYSTEMPATH . 'CodeIgniter', // core CI system
    ];

    /**
     * List of files to autoload.
     * 
     * Files in this array will be included automatically, without the need
     * to use the `require` or `include` statements in your code.
     *
     * @var array
     */
    public $files = [
        // Add any global helper files you want to load here
        // 'app/Helpers/my_helper.php',
    ];

    /**
     * List of class maps to autoload.
     * 
     * A class map allows you to map a class to a specific file path. This is 
     * useful if you don't want to use PSR-4 autoloading.
     *
     * @var array
     */
    public $classmap = [
        // Add any class maps here
        // 'SomeClass' => APPPATH . 'Libraries/SomeClass.php',
    ];
}
