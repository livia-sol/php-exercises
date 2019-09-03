<!DOCTYPE html>
<html>
<head>
	<title>Exercise 4</title>
</head>
<body style="margin-left: 20px">
<?php 
		/*4. Avand array-ul:

	$numbers = [5, 7, 8, 8];

	Scrieti o functie care sa calculeze media, si sa o afiseze.*/

	ini_set('display_errors', 1);
	error_reporting(E_ALL);
		//echo "<pre>";
	$avg=1;
	$numbers = [
		5, 
		7, 
		8, 
		8
	];
	Echo "The given array is: ";
	foreach ($numbers as $index => $value) {
		echo $numbers[$index]." ";
	}
	echo "<br>";
	average($numbers);

	function average($numbers){
		echo "The average of the numbers from array is ",(array_sum($numbers)/count($numbers)).".";}
		?>
	</body>
	</html>