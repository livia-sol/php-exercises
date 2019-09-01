<!-- Print ‘world’ as value for a variable created from a value of a variable. -->
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2.1</title>
</head>
<body>
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*
Twinkle, Twinkle little star
*/


$var = 'hello';

$$var = 'world';

echo $hello;
echo '<br>';
echo $$var;

?>
</body>
</html>