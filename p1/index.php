<?php

// Player 1 rolls 
$player1_roll1 = rand(1, 6);
$player1_roll2 = rand(1, 6);

// Player 2 rolls
$player2_roll1 = rand(1, 6);
$player2_roll2 = rand(1, 6);

// Player totals
$player1_total = $player1_roll1 + $player1_roll2;
$player2_total = $player2_roll1 + $player2_roll2;

// Find winner
$winner_string = '';

if ($player1_total > $player2_total) {
    $winner_string = 'Player 1 wins!';
} elseif ($player1_total < $player2_total) {
    $winner_string = 'Player 2 wins!';
} else {
    $winner_string = 'It is a tie!';
}

require "index-view.php";