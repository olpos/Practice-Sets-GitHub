<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits Array</title>
</head>
<body>
<h2>List of Fruits</h2>

<?php
// Creating an array of fruits
$fruits = ["Apple", "Banana", "Cherry", "Mango", "Grapes"];

// Displaying the fruits using a for loop
echo "<h3>Using For Loop:</h3>";
echo "<ol>";
for ($i = 0; $i < count($fruits); $i++) {
    echo "<li>" . $fruits[$i] . "</li>";
}
echo "</ol>";

// Displaying the fruits using a while loop
echo "<h3>Using While Loop:</h3>";
echo "<ol>";
$x = 0;
while ($x < count($fruits)) {
    echo "<li>" . $fruits[$x] . "</li>";
    $x++;
}
echo "</ol>";
?>