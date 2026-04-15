<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>

<body>
    <?php # Script 1.8 - numbers.php 

    // Create the variables:
    $quantity = 12;
    $price = 3.62;
    $taxrate = .075;

    // Perform the calculations:
    $total = $quantity * $price;
    $total = $total + ($total * $taxrate);

    // Format the total:
    $total = number_format($total, 2);

    // Print the results:
    echo '<p>Your are purchasing <b>' . $quantity . '</b> widget(s) at a cost of <b>$' . $price . '</b> each. With tax, the total comes to <b>$' . $total . '</b>.</p>';

    ?>
</body>

</html>