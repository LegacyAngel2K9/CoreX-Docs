<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Database extends Controller
{
    public function index()
    {
        return view('docs/database');
    }

    public function getDatabaseStructure()
    {
        $databaseStructure = [
            'tables' => [
                'characters' => [
                    'description' => 'Stores player characters and their stats.',
                    'columns' => [
                        'id' => 'Primary Key, Auto Increment',
                        'user_id' => 'Player Unique Identifier',
                        'name' => 'Character Name',
                        'age' => 'Character Age',
                        'gender' => 'Character Gender (Male/Female)',
                        'cash' => 'Current Cash Balance',
                        'bank' => 'Current Bank Balance',
                        'inventory' => 'Stored Inventory Items (JSON Format)',
                        'status' => 'Alive/Dead Status'
                    ]
                ],
                'banking' => [
                    'description' => 'Handles player banking data and transactions.',
                    'columns' => [
                        'id' => 'Primary Key, Auto Increment',
                        'character_id' => 'Linked Character ID',
                        'balance' => 'Current Bank Balance',
                        'transactions' => 'Transaction History (JSON Format)'
                    ]
                ],
                'inventory' => [
                    'description' => 'Manages item storage for players.',
                    'columns' => [
                        'id' => 'Primary Key, Auto Increment',
                        'character_id' => 'Linked Character ID',
                        'items' => 'Stored Items (JSON Format)',
                        'max_weight' => 'Maximum Carrying Capacity'
                    ]
                ],
                'vehicles' => [
                    'description' => 'Tracks owned vehicles and their locations.',
                    'columns' => [
                        'id' => 'Primary Key, Auto Increment',
                        'character_id' => 'Linked Character ID',
                        'model' => 'Vehicle Model Name',
                        'plate' => 'Vehicle License Plate',
                        'garage_location' => 'Stored Garage Location',
                        'fuel_level' => 'Current Fuel Level',
                        'health' => 'Vehicle Health Status',
                        'stored' => 'Boolean, Whether the Vehicle is in Garage'
                    ]
                ],
                'properties' => [
                    'description' => 'Handles buyable and rentable properties.',
                    'columns' => [
                        'id' => 'Primary Key, Auto Increment',
                        'character_id' => 'Linked Character ID',
                        'address' => 'Property Address',
                        'rent_price' => 'Rental Price (If Rented)',
                        'purchase_price' => 'Purchase Price (If Owned)',
                        'ownership' => 'Owned/Rented Status',
                        'storage_capacity' => 'Maximum Storage Capacity'
                    ]
                ],
                'jobs' => [
                    'description' => 'Defines available jobs and salaries.',
                    'columns' => [
                        'id' => 'Primary Key, Auto Increment',
                        'job_name' => 'Job Title',
                        'salary' => 'Base Salary',
                        'is_whitelisted' => 'Boolean, Whether the Job Requires Approval'
                    ]
                ],
                'player_jobs' => [
                    'description' => 'Tracks which character has which job.',
                    'columns' => [
                        'id' => 'Primary Key, Auto Increment',
                        'character_id' => 'Linked Character ID',
                        'job_id' => 'Linked Job ID',
                        'rank' => 'Job Rank',
                        'hired_at' => 'Date and Time of Hiring'
                    ]
                ],
                'permissions' => [
                    'description' => 'Stores admin and moderator permissions linked to Discord roles.',
                    'columns' => [
                        'id' => 'Primary Key, Auto Increment',
                        'discord_id' => 'Linked Discord Account ID',
                        'role_name' => 'Assigned Role Name'
                    ]
                ],
                'logs' => [
                    'description' => 'Logs admin actions and security events.',
                    'columns' => [
                        'id' => 'Primary Key, Auto Increment',
                        'character_id' => 'Linked Character ID',
                        'action' => 'Logged Action Description',
                        'timestamp' => 'Date and Time of Event'
                    ]
                ]
            ]
        ];

        return $this->response->setJSON($databaseStructure);
    }
}
