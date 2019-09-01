<!-- Write a PHP script to display the following string with a new-line using concatenating assignment operator and
the same result using concatenation operator (.)
Sample Strings :
Multi-line example
of what not to do -->
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 1.3</title>
</head>
<body>
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*
Multi-line example
of what not to do
*/

$var = 'Multi-line example'. "<br>" . 'of what not to do';

echo $var;

?>
</body>
</html>