	<!DOCTYPE html>
	<html>
	<head>
		<title>Exercise 6.3</title>
	</head>
	<body style="margin-left: 20px">
	<?php 
	/*Exercise 6.3

	Display the bellow using comma instead of (.) where John, MBA and Business 
	are actually variables.

	John is an MBA. 
	He is a Business man.*/
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	$John='John';
	$MBA='MBA';
	$Business='Business';
	echo "$John"," is an ",$MBA,".","<br>","He is a $Business man.";

	?>
	</body>
	</html>