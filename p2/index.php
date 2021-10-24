<?php

// Computer rolls 
$computer_roll1 = rand(1, 6);
$computer_roll2 = rand(1, 6);
$computer_total = $computer_roll1 + $computer_roll2;

session_start();
$_SESSION['computer_total'] = $computer_total;

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $player_roll1 = $results['player_roll1'];
    $player_roll2 = $results['player_roll2'];
    $player_total = $results['player_total'];
    $bet = $results['bet'];
    $computer_total_old = $results['computer_total'];
    $winner = $results['winner'];

    $_SESSION['results'] = null;
}


require "index-view.php";