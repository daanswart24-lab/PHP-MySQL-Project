<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefined Variables</title>
</head>
<body>
    <?php # Script 1.5 - predefined.php 
    
    // Create shorthand for some predefined variables:
    $file  = $_SERVER['SCRIPT_FILENAME'];

    // Create more shorthands for some predefined variables:
    $user = $_SERVER['HTTP_USER_AGENT'];
    $server = $_SERVER['SERVER_SOFTWARE'];

    // Print the name of the script being executed:
    echo "<p>You are running the file:<br><b>$file</b></p>\n";

    // Print the information about the user accessing the script:
    echo "<p>Your are viewing this page using:<br><b>$user</b></p>\n";

    // Print out the server software that is running on the server:
    echo "<p>The server is running:<br><b>$server</b></p>\n";

    ?>
</body>
</html> 