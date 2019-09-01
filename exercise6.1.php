	<!DOCTYPE html>
	<html>
	<head>
		<title>Exercise 6.1</title>
	</head>
	<body style="margin-left: 20px">
	<?php 
	/*Exercise 6.1

	Display in at least 2 ways concatenated string of the first, 
	third and the last letter of the word Adrian.*/
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	echo "<h3>Adrian</h3>".'<br /><br />';

	$name="Adrian";
	echo $name[0].$name[2].$name[5].'<br /><br />';

	$concat=$name[0];
	$concat.=$name[2];
	$concat.=$name[5];

	print($concat);
	?>
	</body>
	</html>