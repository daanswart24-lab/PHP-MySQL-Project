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
        // Script 2.2 - handle_form.php (versie met gender check)

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
    </div>
</body>

</html>