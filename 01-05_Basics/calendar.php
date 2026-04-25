<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
</head>

<body>
    <form action="calendar.php">
        <?php
        # Script  2.6 - calendar.php

        // This script generates three drop-down lists: 
        // one for the month, one for the day, and one for the year.

        // Make the months array:
        $months = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

        // Make the days and years arrays:
        $days = range(1, 31);
        $years = range(2011, 2021);

        // Print the month drop-down list:
        echo '<select name="month">';
        foreach ($months as $key => $value) {
            echo "<option value=\"$key\">$value</option>\n";
        }
        echo '</select>';

        // Print the day drop-down list:
        echo '<select name="day">';
        foreach ($days as $value) {
            echo "<option value=\"$value\">$value</option>\n";
        }
        echo '</select>';

        // Print the year drop-down list:
        echo '<select name="year">';
        foreach ($years as $value) {
            echo "<option value=\"$value\">$value</option>\n";
        }
        echo '</select>';

        ?>
    </form>
</body>

</html>