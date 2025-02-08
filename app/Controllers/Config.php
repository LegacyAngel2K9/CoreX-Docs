<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Config extends Controller
{
    public function index()
    {
        return view('docs/config');
    }

    public function getConfigDetails()
    {
        $configDetails = [
            'title' => 'Configuration Guide',
            'settings' => [
                'Database' => [
                    'description' => 'Update your MySQL credentials in config.lua.',
                    'example' => [
                        'host' => 'localhost',
                        'user' => 'root',
                        'password' => 'password',
                        'database' => 'corex'
                    ]
                ],
                'Economy' => [
                    'description' => 'Modify starting cash, bank balance, and salaries.',
                    'example' => [
                        'startingCash' => 500,
                        'startingBank' => 1000,
                        'salaryInterval' => 15
                    ]
                ],
                'Inventory' => [
                    'description' => 'Set maximum inventory weight and default item weights.',
                    'example' => [
                        'maxWeight' => 50,
                        'defaultWeight' => [
                            'water' => 1,
                            'bread' => 1,
                            'health_pack' => 2
                        ]
                    ]
                ],
                'Vehicles' => [
                    'description' => 'Configure vehicle settings including default garage and impound fees.',
                    'example' => [
                        'defaultGarage' => 'Main Garage',
                        'impoundFee' => 500
                    ]
                ],
                'Housing' => [
                    'description' => 'Enable or disable interiors and adjust storage capacity.',
                    'example' => [
                        'enableInteriors' => true,
                        'defaultStorageCapacity' => 50
                    ]
                ],
                'Jobs' => [
                    'description' => 'Adjust salary payout interval and default job settings.',
                    'example' => [
                        'salaryInterval' => 15,
                        'defaultJob' => 'Unemployed'
                    ]
                ],
                'Admin' => [
                    'description' => 'Enable Discord role-based admin system and define allowed roles.',
                    'example' => [
                        'enableDiscordPermissions' => true,
                        'adminRoles' => ['Admin', 'Moderator']
                    ]
                ]
            ]
        ];

        return $this->response->setJSON($configDetails);
    }
}
