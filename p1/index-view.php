<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Dice Game</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>

<body>

    <h1>Dice Game: Bigger Rolls</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Player 1 rolls 2 dice - values from 1 to 6. Calculate the total. </li>
        <li>Player 2 rolls 2 dice - values from 1 to 6. Calculate the total. </li>
        <li>The Player with the higher total wins</li>
        <li>Otherwise, it's a draw</li>
    </ul>

    <h2>Results</h2>
    <ul>
        <li>Player 1 rolls <?php echo $player1_roll1; ?> and <?php echo $player1_roll2; ?> for a total of
            <?php echo $player1_total; ?>.</li>
        <li>Player 2 rolls <?php echo $player2_roll1; ?> and <?php echo $player2_roll2; ?> for a total of
            <?php echo $player2_total; ?>.</li>
        <li><?php echo $winner_string; ?></li>
    </ul>
</body>

</html>