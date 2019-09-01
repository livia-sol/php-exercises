<!-- Write a PHP script to display the following strings using 2 variables and the second variable to have the first
one in the value.
Sample Strings :
Hello John -->
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 1.2</title>
</head>
<body>
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

$var = 'Hello';
$var2 = "$var John";

echo $var2;
?>
</body>
</html>