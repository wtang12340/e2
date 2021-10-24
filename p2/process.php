<?php

$bet = $_POST['bet'];

$player_roll1 = rand(1, 6);
$player_roll2 = rand(1, 6);
$player_total = $player_roll1 + $player_roll2;

session_start();
$computer_total = $_SESSION['computer_total'];

if ($bet == 'higher') {
    if ($player_total > $computer_total) {
        $winner = true;
    }
} elseif ($bet == 'lower') {
    if ($player_total < $computer_total) {
        $winner = true;
    }
} elseif ($bet == 'same') {
    if ($player_total == $computer_total) {
        $winner = true;
    }
} else {
    $winner = false;
}

$_SESSION['results'] = [
    'winner' => $winner,
    'player_roll1' => $player_roll1,
    'player_roll2' => $player_roll2,
    'player_total' => $player_total,
    'bet' => $bet,
    'computer_total' => $computer_total
];

header('Location: index.php');