<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Numbers from Matrix</title>
</head>
<body> 

<h2>Even Numbers from Matrix</h2>

<?php
// Given matrix
$matrix = [
    [12, 23, 34],
    [45, 55, 62],
    [71, 84, 90]
];
echo "<h3>Even Numbers:</h3>";
echo "<ul>";

// Loop through the matrix using while loop
$row = 0;
while ($row < count($matrix)) {
    $col = 0;
    while ($col < count($matrix[$row])) {
        if ($matrix[$row][$col] % 2 == 0) { // Check if even
            echo "<li>" . $matrix[$row][$col] . "</li>";
        }
        $col++;
    }
    $row++;
}

echo "</ul>";
?>

</body>
</html>