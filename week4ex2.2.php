		<!DOCTYPE html>
		<html>
		<head>
			<title>Exercise 2</title>
		</head>
		<body style="margin-left: 20px">
			<?php 
		/*2. Avand urmatoarul array:

	$colors = ['red', 'orange', 'pink', 'yellow'];

	Ordonati si afisati acest array. Functii folosite (sort, print_r)
	*/
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	$colors =array('red', 'orange', 'pink', 'yellow');

	echo "The array of colors is : ";
	foreach ($colors as $key  => $value) {
		echo $colors[$key].", ";
	}

	echo "<br><br>";
		//$arraylength = count($colors);
		//echo $arraylength."<br>";

	sort($colors);
	echo "The sorted colors are: ";
	foreach ($colors as $key => $value) {
		echo $colors[$key].", ";
	}
	?>
</body>
</html>