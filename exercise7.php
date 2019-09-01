	<!DOCTYPE html>
	<html>
	<head>
		<title>Exercise 7</title>
	</head>
	<body style="margin-left: 20px">
	<?php 
	/*Exercise 7

	PHP allows several different types of variables. For this PHP exercise, you will create one variable and assign it different values, then test its type for each value.

	Write a script using one variable “;/” to print the following 
	to the browser. Your echo statements may include no words except “Value is”. 
	In other words, use the function that will output the variable type to get the requested text. Use simple HTML to print each statement on its own line and add a relevant title to your page. Include line breaks in your code to produce clean, readable HTML.

	Value is string.
	Value is double.
	Value is boolean.
	Value is integer.
	Value is NULL.*/
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	function typeofvariable($var){
		return gettype($var);
	}

	$whatsit='text';
	echo "Value is ".typeofvariable($whatsit).'<br />';

	$whatsit=7.8000000000000000000001;
	echo "Value is ".typeofvariable($whatsit).'<br />';

	$whatsit=true;
	echo "Value is ".typeofvariable($whatsit).'<br />';

	$whatsit=9;
	echo "Value is ".typeofvariable($whatsit).'<br />';
	
	$whatsit=NULL;
	echo "Value is ".typeofvariable($whatsit).'<br />';
	?>
	</body>
	</html>