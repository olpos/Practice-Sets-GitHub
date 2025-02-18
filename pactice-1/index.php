<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Area Calculator</title>
</head>
<body>

<h2>Triangle Area Calculator</h2>

<form method="POST">
    Side 1: <input type="number" step="any" name="side1" required><br><br>
    Side 2: <input type="number" step="any" name="side2" required><br><br>
    Side 3: <input type="number" step="any" name="side3" required><br><br>
    <button type="submit" name="calculate">Calculate Area</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['side1'];
    $b = $_POST['side2'];
    $c = $_POST['side3'];
    
     // Calculate semi-perimeter
     $s = ($a + $b + $c) / 2;  
     
     // Calculate area using Heron's formula (without sqrt function)
     $areaSquared = $s * ($s - $a) * ($s - $b) * ($s - $c);
     
     if ($areaSquared > 0) {