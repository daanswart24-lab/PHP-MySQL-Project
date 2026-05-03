<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Arrays</title>
</head>

<body>
    <table border="0" cellspacing="3" cellpadding="3" align="center">
        <tr>
            <td>
                <h2>Rating</h2>
            </td>
            <td>
                <h2>Title</h2>
            </td>
        </tr>
        <?php # Script 2.8 - sorting.php

        // Create the array of movies and ratings:
        $movies = [
            'Casablanca' => 10,
            'To Kill a Mockingbird' => 10,
            'The English Patient' => 2,
            'Strange Than Fiction' => 9,
            'Story Of The Weeping Camel' => 5,
            'Donnie Darko' => 7,
        ];

        // Print out the array in the original order:
        echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
        foreach ($movies as $title => $rating) {
            echo "<tr><td>$rating</td>
                <td>$title</td></tr>\n";
        }

        // Sort the array by title and print it out:
        ksort($movies);
        echo '<tr><td colspan="2"><b>Sorted by title:</b></td></tr>';
        foreach ($movies as $title => $rating) {
            echo "<tr><td>$rating</td>
                <td>$title</td></tr>\n";
        }

        // Sort the array by rating by descending order and print it out:
        arsort($movies);
        echo '<tr><td colspan="2"><b>Sorted by rating (descending):</b></td></tr>';
        foreach ($movies as $title => $rating) {
            echo "<tr><td>$rating</td>
                <td>$title</td></tr>\n";
        }

        ?>
    </table>
</body>

</html>