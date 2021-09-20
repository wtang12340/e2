<?php

# Define 4 different variables, which will
# each represent how much a given coin is worth
$penny_value = .01;
$nickel_value = .05;
$dime_value = .10;
$quarter_value = .25;
$halfdollar_value = .5;

# Define 4 more variables, which will each
# represent how many of each coin is in the bank
$pennies = 300;
$nickels = 5;
$dimes = 0;
$quarters = 125;
$halfdollars = 33;

# Add up how much money is in the piggy bank
$total = ($pennies * $penny_value) + ($nickels * $nickel_value) + ($dimes * $dime_value) + ($quarters * $quarter_value) + ($halfdollars * $halfdollar_value);

?>
<!DOCTYPE html>
<html lang='en'>

<head>

    <title>PHPiggy Bank</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>

<body>

    <img alt='PHPiggy Bank Logo' src='https://s3.amazonaws.com/making-the-internet/php-piggy-bank-logo@2x.png'
        style='width:202px;'>

    <p>
        You have $<?php echo $total; ?> in your piggy bank.
        You have <?php echo $quarter; ?> quarters in your bank.
    </p>

</body>

</html>