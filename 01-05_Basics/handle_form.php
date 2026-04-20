<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Feedback</title>
</head>

<body>
    <?php
    // Script 2.2 - handle_form.php

    // Create shorhand variables to hold the data from the form:
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comments = $_REQUEST['comments'];

    // Print the received email, name, and comment values:
    echo "<p>Thank you, <b>$name</b>, for the following comments:
        <br /><tt>$comments</tt></p>
        <p>We will reply to you at <i>$email</i>.</p>\n";

    ?>

</body>

</html>