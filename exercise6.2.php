	<!DOCTYPE html>
	<html>
	<head>
		<title>Exercise 6.2</title>
	</head>
	<body style="margin-left: 20px">
	<?php 
	/*Exercise 6.2

	Display the string 0123456789 starting from an empty variable and 
	the casted value of this variable to be the starting point of 
	an iteration which will concatenate the above string.
	*/
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	$a='';
	$i=(int)$a;echo $i.'<br>';//this line was added after what I had seen the solved solution

	for($i=0;$i<10;$i++){
		$a.="$i";
	}
	print $a;
	echo '<br>';
	var_dump($a);
	?>
	</body>
	</html>