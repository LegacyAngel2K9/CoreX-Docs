<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Commands extends Controller
{
    public function index()
    {
        return view('docs/commands');
    }

    public function getCommands()
    {
        $commands = [
            'Admin Commands' => [
                [
                    'command' => '/kick [id]',
                    'description' => 'Kick a player from the server.'
                ],
                [
                    'command' => '/ban [id]',
                    'description' => 'Ban a player permanently.'
                ],
                [
                    'command' => '/setmoney [id] [amount]',
                    'description' => 'Set player money.'
                ],
                [
                    'command' => '/giveitem [id] [item] [quantity]',
                    'description' => 'Give an item to a player.'
                ],
                [
                    'command' => '/spawnvehicle [model]',
                    'description' => 'Spawn a vehicle.'
                ]
            ],
            'Player Commands' => [
                [
                    'command' => '/pay [id] [amount]',
                    'description' => 'Pay another player.'
                ],
                [
                    'command' => '/job',
                    'description' => 'Show current job.'
                ],
                [
                    'command' => '/rentproperty',
                    'description' => 'Rent a house.'
                ],
                [
                    'command' => '/sellproperty [id]',
                    'description' => 'Sell a house to another player.'
                ]
            ]
        ];

        return $this->response->setJSON($commands);
    }
}
