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
        # Script 2.5 - handle_form.php #4

        // Check for form submission and print the submitted values:
        if (!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])) {
            echo "<p>Thank you, <b>{$_POST['name']}</b>, for the following comments:<br>
                <tt>{$_POST['comments']}</tt></p>
                <p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
        } else { // Missing form value.
            echo '<p><b>Please go back and fill out the form again.</b></p>';
        }

        ?>
    </div>
</body>

</html>