<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
<h3> This is pair program 1</h3>
<?php
include ("functions.php");

$numbers = array(7,9,8,9,8,8,6);
printArr($numbers);
echo"Largest: ". largest($numbers)."<br>";
echo "Average: " .avg($numbers)."<br>";
removeDups($numbers);

$newArray = distribution($numbers);
var_dump($newArray);
?>
</body>
</html>
