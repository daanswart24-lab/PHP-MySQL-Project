<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Feedback</title>
</head>

<body>
    <?php
    # Script 2.5 - handle_form.php #4

    // Check for form submission and print the submitted values:
    if (!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])) {
        echo "<p>Thank you, <b>{$_POST['name']}</b>, for the following comments:<br>
            <i>{$_POST['comments']}</i></p>
            <p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
    } else { // Missing form value.
        echo '<p>Please go back and fill out the form again.</p>';
    }

    ?>

</body>

</html>