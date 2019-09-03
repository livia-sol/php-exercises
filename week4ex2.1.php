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

		echo "<pre>";

		function sorting($colors){
			sort($colors);
			print_r($colors);
		}
		$colors =array('red', 'orange', 'pink', 'yellow');
		sorting($colors);
		?>
		</body>
		</html>