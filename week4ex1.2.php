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
		for($i=0;$i<$n;$i++){
			if($i%2==0) echo "$i is a even number ----- ";
			else echo "$i is a odd number<br>";
		}
	}
	$n=100;
	evenodd($n);
	?>
</body>
</html>