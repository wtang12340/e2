<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{

    public function migrateRoundsTable()
    {
        $this->app->db()->createTable('rounds', [
            'computer_roll ' => 'int',
            'bet' => 'varchar(6)',
            'player_roll' => 'int',
            'player_won' => 'tinyint(1)',
            'timestamp' => 'timestamp'
        ]);
    }

    public function seedRoundsTable()
    {
        $faker = Factory::create();
        for ($i = 10; $i > 0; $i--) {
            $player_roll = rand(0, 6);
            $computer_roll = rand(0, 6);
            $bet = ['higher', 'lower', 'same'][rand(0, 2)];
            $player_won = 0;

            if ($bet == 'higher') {
                if ($player_roll > $computer_roll) {
                    $player_won = 1;
                }
            } elseif ($bet == 'lower') {
                if ($player_roll < $computer_roll) {
                    $player_won = 1;
                }
            } elseif ($bet == 'same') {
                if ($player_roll == $computer_roll) {
                    $player_won = 1;
                }
            } else {
                $player_won = 0;
            }

            $this->app->db()->insert('rounds', [
                'player_won' => $player_won,
                'computer_roll' => $computer_roll,
                'bet' => $bet,
                'player_roll' => $player_roll,
                'timestamp' => $faker->dateTimeInInterval('-' . $i . ' days', '+1 day')->format('Y-m-d H:i:s')
            ]);
        }
    }
}