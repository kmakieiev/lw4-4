<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Display</h2>

<?php

$file = fopen('data.csv', 'r');

if ($file !== false) {
    echo '<table>';
    $header = fgetcsv($file);
    echo '<tr>';
    foreach ($header as $col) {
        echo '<th>' . htmlspecialchars($col) . '</th>';
    }
    echo '</tr>';

    while (($row = fgetcsv($file)) !== false) {
        echo '<tr>';
        foreach ($row as $col) {
            echo '<td>' . htmlspecialchars($col) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';

    fclose($file);
}
?>

</body>
</html>
