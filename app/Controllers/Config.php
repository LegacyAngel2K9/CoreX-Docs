<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Config extends BaseController
{
    /**
     * Configuration Guide Page
     */
    public function index()
    {
        return view('docs/config');
    }

    /**
     * Fetch Server Configuration
     * Returns JSON response with server configuration details.
     */
    public function getServerConfig()
    {
        $config = [
            'server_name'  => getenv('app.baseURL'),
            'database'     => getenv('database.default.database'),
            'db_host'      => getenv('database.default.hostname'),
            'db_user'      => getenv('database.default.username'),
            'db_driver'    => getenv('database.default.DBDriver'),
            'log_level'    => getenv('app.logThreshold'),
            'encryption'   => getenv('app.encryptionKey') ? 'Enabled' : 'Disabled',
        ];

        return $this->response
            ->setStatusCode(ResponseInterface::HTTP_OK)
            ->setJSON($config);
    }
}
