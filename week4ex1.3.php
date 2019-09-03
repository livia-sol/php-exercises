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
		$i=0;$j=1;
		echo "Even - Odd <br>";
		while($i<=$n OR $j<=$n){
			if($i%2==0){
				echo " $i ";
				$i+=2;
			}
			echo "  ---- ";
			if($j%2==1 AND $j<= $n){
				echo " $j";
				$j+=2;
			}
			echo "<br>";
		}
	}
	$n=33;
	evenodd($n);

	// echo "<br>";
	// howmany($n);
	// function howmany(&$n){
	// 	$even=0;$odd=0;
	// 	for($i=0;$i<=$n;$i++){
	// 		if($i%2==0) $even++;
	// 		else $odd++;
	// 	}
	// 	echo "There are $even even numbers from 0 to $n inclusive.<br>";
	// 	echo "There are $odd odd numbers from 0 to $n inclusive.<br>";
	// }	

	?>
</body>
</html>	


<!-- faci 2 while-uri cand ar fi fost necesar doar 1 singur	-->
