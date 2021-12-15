<?php

namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $bet = $this->app->old('bet');
        $player_roll = $this->app->old('player_roll');
        $player_won = $this->app->old('player_won');
        $computer_roll_old = $this->app->old('computer_roll_old');


        return $this->app->view('index', [
            'bet' => $bet,
            'player_roll' => $player_roll,
            'player_won' => $player_won,
            'computer_roll_old' => $computer_roll_old
        ]);
    }

    public function process()
    {
        $this->app->validate([
            'bet' => 'required'
        ]);

        $computer_roll = $this->app->input('computer_roll');
        $bet = $this->app->input('bet');
        $player_roll = rand(1, 6);

        if ($bet == 'higher') {
            if ($player_roll > $computer_roll) {
                $player_won = true;
            }
        } elseif ($bet == 'lower') {
            if ($player_roll < $computer_roll) {
                $player_won = true;
            }
        } elseif ($bet == 'same') {
            if ($player_roll == $computer_roll) {
                $player_won = true;
            }
        } else {
            $player_won = false;
        }

        $this->app->db()->insert('rounds', [
            'player_won' => ($player_won) ? 1 : 0,
            'computer_roll' => $computer_roll,
            'bet' => $bet,
            'player_roll' => $player_roll,
            'timestamp' => date('Y-m-d H:i:s')
        ]);

        return $this->app->redirect('/', ['bet' => $bet, 'player_roll' => $player_roll, 'player_won' => $player_won, 'computer_roll_old' => $computer_roll]);
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');
        $rounds_won = $this->app->db()->findByColumn('rounds', 'player_won', '=', 1);

        return $this->app->view('history', ['rounds' => $rounds, 'rounds_won' => $rounds_won]);
    }

    public function round()
    {
        $id = $this->app->param('id');

        $round = $this->app->db()->findById('rounds', $id);

        return $this->app->view('round',  ['round' => $round]);
    }
}