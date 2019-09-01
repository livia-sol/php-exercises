<!-- Pass a variable by reference to a function so the function can modify the variable -->
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2.2</title>
</head>
<body style="margin-left: 20px">
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);


$var = 'Variable';

function change_variable(&$param)
{
	$param .= ' something else will be modified';
}

change_variable($var);

echo $var; 

echo '<br><br><br><br>';

$cantitate = 10;

function schimbam_cantitate(&$cant)
{	
	$cant = 5;
	echo 'in functie' . $cant . '<br />';
}

schimbam_cantitate($cantitate);

echo $cantitate;

?>

</body>
</html>