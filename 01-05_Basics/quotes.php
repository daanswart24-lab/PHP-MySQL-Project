<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
</head>

<body>
    <?php # Script 1.10 - quotes.php 

    // Create the variables:
    $quantity = 30;
    $price = 119.95;
    $taxrate = .05;

    // Perform the calculations:
    $total = $quantity * $price;
    $total = $total + ($total * $taxrate);

    // Format the total:
    $total = number_format($total, 2);

    // Print the results using double quotation marks:
    echo "<h3>Using double quotation marks</h3>";
    echo "<p>Your are purchasing <b>$quantity</b> widget(s) at a cost of <b>\$$price</b> each. With tax, the total comes to <b>\$$total</b>.</p>\n";

    // Print the results using single quotation marks:
    echo "<h3>Using single quotation marks</h3>";
    echo '<p>Your are purchasing <b>$quantity</b> widget(s) at a cost of <b>\$$price</b> each. With tax, the total comes to <b>\$$total</b>.</p>\n';
    ?>
</body>

</html>