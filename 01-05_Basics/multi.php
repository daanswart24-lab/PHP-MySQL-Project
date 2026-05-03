<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
</head>

<body>
    <p>Some North American States, Provinces, and Territories:</p>
    <?php # Script 2.7 - multi.php

    // Create an array of Mexican states:
    $mexico = array(
        'YU' => 'Yucatan',
        'BC' => 'Baja California',
        'OA' => 'Oaxaca'
    );

    // Create an array of American States:
    $us = array(
        'MD' => 'Maryland',
        'IL' => 'Illinois',
        'PA' => 'Pennsylvania',
        'IA' => 'Iowa'
    );

    // Create an array of Canadian provinces and territories:
    $canada = array(
        'QC' => 'Quebec',
        'AB' => 'Alberta',
        'NT' => 'Northwest Territories',
        'YT' => 'Yukon',
        'PE' => 'Prince Edward Island'
    );

    // Combine all arrays into a multidimensional array:
    $n_america = array(
        'Mexico' => $mexico,
        'United States' => $us,
        'Canada' => $canada
    );

    // Print the array:
    foreach ($n_america as $country => $list) {
        echo "<h2>$country</h2><ul>";
        foreach ($list as $k => $v) {
            echo "<li>$k: $v</li>\n";
        }
        echo '</ul>';
    } // End of main FOREACH

    ?>

</body>

</html>