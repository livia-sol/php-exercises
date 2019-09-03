		<!DOCTYPE html>
		<html>
		<head>
			<title>Exercise 1</title>
		</head>
		<body style="margin-left: 20px">
			<?php 
		/*1. Scrieti o functie care sa primeasca un parametru n.

	Sa faca un loop de la 0 la n in care sa afiseze care numere sunt pare, si care numere sunt impare
	*/
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	function evenodd($n){
		$i=0;
		while($i<=$n){
			if($i%2==0)
				echo "$i is even number ----- ";
			else 
				echo "$i is odd number<br>";
			$i++;
		}
	}	
	$n=50;
	evenodd($n);
	?>
</body>
</html>		
