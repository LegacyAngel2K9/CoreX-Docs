<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Install extends BaseController
{
    /**
     * Installation Guide Page
     */
    public function index()
    {
        return view('docs/install');
    }
}
