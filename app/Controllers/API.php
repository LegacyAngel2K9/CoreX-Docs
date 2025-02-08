<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class API extends Controller
{
    public function index()
    {
        return view('docs/api');
    }

    public function getDocs()
    {
        $docs = [
            [
                'title' => 'Get Installation Guide',
                'endpoint' => '/api/install',
                'method' => 'GET',
                'description' => 'Fetches the installation guide for CoreX.'
            ],
            [
                'title' => 'Get Configuration Details',
                'endpoint' => '/api/config',
                'method' => 'GET',
                'description' => 'Returns configuration setup instructions.'
            ],
            [
                'title' => 'Get Command List',
                'endpoint' => '/api/commands',
                'method' => 'GET',
                'description' => 'Provides a list of admin and player commands.'
            ],
            [
                'title' => 'Get Database Structure',
                'endpoint' => '/api/database',
                'method' => 'GET',
                'description' => 'Returns details about CoreX database schema.'
            ]
        ];

        return $this->response->setJSON($docs);
    }

    public function install()
    {
        $installGuide = [
            'title' => 'Installation Guide',
            'steps' => [
                'Download CoreX from GitHub.',
                'Import corex.sql into your database.',
                'Configure config.lua with your server settings.',
                'Start the FiveM server and verify installation.'
            ]
        ];

        return $this->response->setJSON($installGuide);
    }

    public function config()
    {
        $configDetails = [
            'title' => 'Configuration Guide',
            'settings' => [
                'Database' => 'Update your MySQL credentials in config.lua.',
                'Economy' => 'Modify starting cash and salaries in config.lua.',
                'Jobs' => 'Define available jobs in the jobs module.'
            ]
        ];

        return $this->response->setJSON($configDetails);
    }

    public function commands()
    {
        $commands = [
            'Admin Commands' => [
                '/kick [id]' => 'Kick a player from the server.',
                '/ban [id]' => 'Ban a player permanently.',
                '/setmoney [id] [amount]' => 'Set player money.',
                '/giveitem [id] [item] [quantity]' => 'Give an item to a player.',
                '/spawnvehicle [model]' => 'Spawn a vehicle.'
            ],
            'Player Commands' => [
                '/pay [id] [amount]' => 'Pay another player.',
                '/job' => 'Show current job.',
                '/rentproperty' => 'Rent a house.',
                '/sellproperty [id]' => 'Sell a house to another player.'
            ]
        ];

        return $this->response->setJSON($commands);
    }

    public function database()
    {
        $databaseStructure = [
            'tables' => [
                'characters' => 'Stores player characters and their stats.',
                'banking' => 'Handles player banking data.',
                'inventory' => 'Manages item storage for players.',
                'vehicles' => 'Tracks owned vehicles and their locations.',
                'properties' => 'Handles buyable and rentable properties.',
                'jobs' => 'Defines available jobs and salaries.'
            ]
        ];

        return $this->response->setJSON($databaseStructure);
    }
}
