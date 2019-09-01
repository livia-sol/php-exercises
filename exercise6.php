	<!DOCTYPE html>
	<html>
	<head>
		<title>Exercise 6</title>
	</head>
	<body style="margin-left: 20px">
	<?php 
	/*Exercise 6

	For this PHP exercise, write a script using the following variable:
	$around="around";

	Single quotes and double quotes don't work the same way in PHP. 
	Using single quotes ('') and the concatenation operator, 
	echo the following to the browser, using the variable you created:
	What goes around comes around.*/
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	echo "<h2>What goes around comes around.</h2>".'<br /><br />';

	$around="around";
	echo '<i>What goes '.$around.'  comes '.$around.'.</i><br />';

	?>
	</body>
	</html>