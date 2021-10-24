<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Dice Game 2</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>

<body>

    <h1>Dice Game: Place Your Bets</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Computer rolls 2 dice with values from 1 to 6. Calculate the total.</li>
        <li>Player bets whether he will roll <b>higher</b>, <b>lower</b> or <b>same</b> total.</li>
        <li>Player rolls 2 dice with values from 1 to 6. Calculate the total.</li>
        <li>The Player wins if his bet matches the result.</li>
    </ul>

    <h3>Computer Rolling....</h3>
    <h3>Computer rolls <?php echo $computer_roll1; ?> and <?php echo $computer_roll2; ?> for a total of
        <?php echo $computer_total; ?>.</h3>

    <p>Place your bet before your roll:</p>
    <form method="POST" action='process.php'>
        <input type='radio' id='higher' name='bet' value='higher' checked><label for='higher'>Higher than
            <?php echo $computer_total; ?></label><br>
        <input type='radio' id='lower' name='bet' value='lower'><label for='lower'>Lower than
            <?php echo $computer_total; ?></label><br>
        <input type='radio' id='same' name='bet' value='same'><label for='same'><?php echo $computer_total; ?></label>
        <br><br>
        <button type='submit'>Place Bet</button>
    </form>

    <?php if (isset($results)) { ?>

    <h2>Last Game's Results:</h2>
    <ul>
        <li>Computer rolled <b><?php echo $computer_total_old; ?></b>.</li>
        <li>Player rolls <?php echo $player_roll1; ?> and <?php echo $player_roll2; ?> for a total of
            <b><?php echo $player_total; ?></b>.
        </li>
        <li>The player's bet was <b><?php echo $bet; ?></b></li>
        <?php if ($winner) { ?>
        <li>Player Wins</li>
        <?php } else { ?>
        <li>Player Loses</li>
        <?php } ?>
    </ul>

    <?php } ?>


</body>

</html>