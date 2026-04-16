<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constansts</title>
</head>

<body>
    <?php # Script 1.9 - constants.php

    // Set todays's date as a constant:
    define('TODAY', 'April 16, 2026');

    // Print the date, the PHP version, and the operating system information using predefined constants:
    echo '<p>Today is ' . TODAY . '.<br>This server is running version <b>' . PHP_VERSION . '</b> of PHP on the <b>' . PHP_OS . '</b> operating system.</p>';
    ?>
</body>

</html>