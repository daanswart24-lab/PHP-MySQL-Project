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
        # Script  2.9 - calendar.php #2

        // This script generates three drop-down lists: 
        // one for the month, one for the day, and one for the year.

        // Make the months array:
        $months = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');       

        // Print the month drop-down list:
        echo '<select name="month">';
        foreach ($months as $key => $value) {
            echo "<option value=\"$key\">$value</option>\n";
        }
        echo '</select>';

        // Print the day drop-down list:
        echo '<select name="day">';
        for ($day = 1; $day <= 31; $day++) {
            echo "<option value=\"$day\">$day</option>\n";
        }
        echo '</select>';

        // Print the year drop-down list:
        echo '<select name="year">';
        for ($year = 2011; $year <= 2021; $year++) {
            echo "<option value=\"$year\">$year</option>\n";
        }
        echo '</select>';

        ?>
    </form>
</body>

</html>