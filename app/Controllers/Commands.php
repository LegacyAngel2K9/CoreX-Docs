<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Commands extends BaseController
{
    /**
     * Commands Documentation Page
     */
    public function index()
    {
        return view('docs/commands');
    }
}
