<!-- When you are writing scripts, you will often need to see exactly what is inside your variables. For this PHP exercise, think of the ways you can do
that defining the name of a person and the age, then write a script that outputs the following, using the echo statement only for line breaks.
string(5) "Harry"
Harry
int(28)
NULL -->
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 5</title>
</head>
<body style="margin-left: 20px">
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

$name = 'Harry';
$age = 28;

var_dump($name);
echo '<br>';
print $name;
echo '<br>';
var_dump($age);// returns 1
echo '<br>';
settype($age , 'null');
var_dump($age);

?>
</body>
</html>