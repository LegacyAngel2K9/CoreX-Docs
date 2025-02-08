<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Docs extends BaseController
{
    /**
     * Documentation Homepage
     */
    public function index()
    {
        return view('docs/index');
    }

    /**
     * Installation Guide
     */
    public function install()
    {
        return view('docs/install');
    }

    /**
     * Configuration Guide
     */
    public function config()
    {
        return view('docs/config');
    }

    /**
     * Commands Reference
     */
    public function commands()
    {
        return view('docs/commands');
    }

    /**
     * API Reference
     */
    public function api()
    {
        return view('docs/api');
    }

    /**
     * Database Setup Guide
     */
    public function database()
    {
        return view('docs/database');
    }
}
