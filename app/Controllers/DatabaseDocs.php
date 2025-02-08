<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DatabaseDocs extends BaseController
{
    /**
     * Database Documentation Page
     */
    public function index()
    {
        return view('docs/database');
    }
}
