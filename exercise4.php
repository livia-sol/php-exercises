<!DOCTYPE html>
<html>
<head>
	<title>Exercise 4</title>
</head>
<body style="margin-left: 20px">
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*
Value is now 8.
Add 2. Value is now 10.
Subtract 4. Value is now 6.
Multiply by 5. Value is now 30.
Divide by 3. Value is now 10.
Increment value by one. Value is now 11.
Decrement value by one. Value is now 10.
*/

$x = 10;
$add = 7;
$subtract = 20;
$multiply = 5;
$divide = 3;

echo "Value is now $x.";

$x += $add;

echo "<br>Add $add. Value is now $x.";

$x -= $subtract;

echo "<br>Subtract $subtract. Value is now $x.";

$x *= $multiply;

echo "<br>Multiply by $multiply. Value is now $x.";

$x /= $divide;

echo "<br>Divide by $divide. Value is now $x.";

$x++;

echo "<br>Increment value by one. Value is now $x.";

$x--;

echo "<br>Decrement value by one. Value is now $x.";


?>
</body>
</html>