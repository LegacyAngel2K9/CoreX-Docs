<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ConfigDocs extends BaseController
{
    /**
     * Configuration Guide Page
     */
    public function index()
    {
        return view('docs/config');
    }
}
