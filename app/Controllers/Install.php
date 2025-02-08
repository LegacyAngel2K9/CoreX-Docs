<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Install extends Controller
{
    public function index()
    {
        return view('docs/install');
    }

    public function getInstallationGuide()
    {
        $installGuide = [
            'title' => 'CoreX Installation Guide',
            'steps' => [
                'Step 1' => 'Download CoreX from GitHub.',
                'Step 2' => 'Extract the files into your FiveM resources folder.',
                'Step 3' => 'Import corex.sql into your MySQL/MariaDB database.',
                'Step 4' => 'Edit config.lua with your server settings.',
                'Step 5' => 'Add "ensure CoreX" to your server.cfg file.',
                'Step 6' => 'Start your FiveM server and verify the installation.'
            ]
        ];

        return $this->response->setJSON($installGuide);
    }
}
