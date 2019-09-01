	<!DOCTYPE html>
	<html>
	<head>
		<title>Exercise 6.4</title>
	</head>
	<body style="margin-left: 20px">
	<?php 
	/*Exercise 6.4

	Define two variables with values of 56 and 12 and divide them. 
	Predict the type of the result and if it is not an integer cast it as such.

	Change the type of these 2 values in such manner to cover all the data types 
	combination and also change the operator into other arithmetic operators*/
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	$x=56;
	$y=12;
	$z=$x/$y;
	echo "Impartirea numarului $x la $y este: \$z=".$z;
	echo '<br>';
	$typez=gettype($z);
	echo 'Tipul variabilei $z este: '.$typez.'<br>';
	if(!is_integer($z)){
		$z=(int)$z;
	}
	echo "Rezultatul tip intreg este:"."<br>";
	var_dump($z);
	// echo '<hr>';
	// $x=(double)$x;
	// $y=(double)$y;
	// var_dump($x);
	// echo '<br>';
	// var_dump($y);
	// echo '<br> Rest:';
	// var_dump($x%$y);
	// echo '<br> Impartire:';
	// var_dump($x/$y);
	// echo '<br> Impartire:';
	// var_dump($x*$y);
	// echo '<br> Adunare:';
	// var_dump($x+$y);
	// echo '<br> Scadere:';
	// var_dump($x-$y);
	?>
	</body>
	</html>