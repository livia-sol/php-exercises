<!-- Use a for loop cycling 10 times to display a static value from a function which gets incremented using ++
operator. -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="margin-left: 20px">
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo '<pre style="margin-left: 100px; font-size:25px;">';
function ofunctie_statica()
{
	static $var = 0;	
	$var += 1;
	echo $var . '<br>';	
}

for($i = 0; $i < 10; $i++)
{
	ofunctie_statica();
}

ofunctie_statica();
ofunctie_statica();
ofunctie_statica();
ofunctie_statica();
ofunctie_statica();
ofunctie_statica();


?>
</body>
</html>