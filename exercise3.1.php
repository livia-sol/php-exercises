<!-- Use a function to calculate the sum of two variables declared as global. (first version using the keyword global
and another one using global variable $GLOBALS) .
Use a function to calculate the sum of two variables sent as arguments. -->
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 3.1</title>
</head>
<body style="margin-left: 20px">
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

$x = 10;
$y = 7;

function Sum()
{
	global $x, $y;

	echo $x + $y;
	echo '<br>';
}

sum();

function Sum1()
{
	echo $GLOBALS['x'] + $GLOBALS['y'];
	echo '<br>';
}

Sum1();

$x = 11;
$y = 12;

function sum2($x = 14, $y = 13)
{
	echo $x + $y;
}

sum2($x);

?>
</body>
</html>