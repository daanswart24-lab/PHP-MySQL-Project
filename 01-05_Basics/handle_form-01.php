<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Feedback</title>
    <style>
        .error {
            font-weight: bold;
            color: #C00;
        }
    </style>
</head>

<body>
    <?php
    // Script 2.4 - handle_form.php

    // Create a variable to hold the greeting message:
    $greeting = '';

    // Validate the name value:
    if (!empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    } else {
        $name = NULL;
        echo '<p class="error">You forgot to enter your name!</p>';
    }

    // Validate the email value:
    if (!empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    } else {
        $email = NULL;
        echo '<p class="error">You forgot to enter your email address!</p>';
    }

    // Validate the comments value:
    if (!empty($_REQUEST['comments'])) {
        $comments = $_REQUEST['comments'];
    } else {
        $comments = NULL;
        echo '<p class="error">You forgot to enter your comments!</p>';
    }

    // Valdiate the gender value:
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];

        // Check gender value and print appropriate message:
        if ($gender == 'M') {
            $greeting = "<p><b>Good day, Sir!</b></p>";
        } elseif ($gender == 'F') {
            $greeting = "<p><b>Good day, Madam!</b></p>";
        } else {
            echo '<p class="error">Gender should be either "M" or "F"!</p>';
        }

        // If the gender value is not present, set $gender to NULL and print an error message:
    } else {
        $gender = NULL;
        echo '<p class="error">You forgot to enter your gender!</p>';
    }

    // If everything is OK, print the message:
    if ($name && $email && $gender && $comments) {

        // Print the received email, name, comment and greeting values:
        echo "<p>Thank you, <b>$name</b>, for the following comments:
            <br /><tt>$comments</tt></p>
            <p>We will reply to you at <i>$email</i>.</p>\n";
        echo $greeting;

    } else { // If not, print an error message:
        echo '<p class="error">Please go back and fill out the form again.</p>';
    }

    ?>
</body>

</html>