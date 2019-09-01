<!-- Write a PHP script to display the following strings.
Sample Strings :
Tomorrow I'll learn PHP global variables.
This is a bad command : del c:\\*.* -->
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 1</title>
</head>
<body>
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

$var = 'PHP mai adaug ceva';

echo 'Tomorrow I\'ll learn $var global variables.';?>
<br>
<?php echo 'This is a bad command : del c:\\*.*';?>
</body>
</html>