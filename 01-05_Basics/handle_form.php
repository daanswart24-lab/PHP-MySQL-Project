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

    // Create shorthand variables to hold the data from the form:
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comments = $_REQUEST['comments'];

    // Check if the gender value is present in the $_REQUEST array:
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
    } else {
        $gender = NULL;
    }

    // Print the received email, name, and comment values:
    echo "<p>Thank you, <b>$name</b>, for the following comments:
        <br /><tt>$comments</tt></p>
        <p>We will reply to you at <i>$email</i>.</p>\n";
    
    // Print a message based on the gender value:
    if ($gender == 'M') {
        echo "<p><b>Good day, Sir!</b></p>";
    } elseif ($gender == 'F') {
        echo "<p><b>Good day, Madam!</b></p>";
    } else {
        echo "<p><b>You forgot to enter your gender!</b></p>";
    }
    ?>
</body>

</html>