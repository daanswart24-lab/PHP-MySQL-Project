<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Feedback</title>
    <style>
        /* Basisinstellingen voor consistentie */
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            display: flex;
            justify-content: center;
            padding: 40px 20px;
            margin: 0;
        }

        /* De witte container voor de PHP output */
        .feedback-container {
            background: #ffffff;
            max-width: 500px;
            width: 100%;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #300acc;
        }

        /* Tekst styling */
        p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        b {
            color: #300acc;
        }

        /* Foutmeldingen styling */
        .error {
            font-weight: bold;
            color: #C00;
            background: #fff0f0;
            padding: 10px;
            border-radius: 5px;
            border-left: 4px solid #C00;
        }

        /* Styling voor de comments blok */
        tt {
            display: block;
            background: #f9f9f9;
            padding: 10px;
            border-left: 3px solid #ddd;
            margin-top: 10px;
            font-family: 'Courier New', Courier, monospace;
            color: #555;
        }

        i {
            color: #555;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="feedback-container">
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

        // Validate the gender value:
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
    </div>
</body>

</html>