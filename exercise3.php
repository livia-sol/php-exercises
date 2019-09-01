<!-- $x=10;
$y=7;
Write code to print out the following:
10 + 7 = 17
10 - 7 = 3
10 * 7 = 70
10 / 7 = 1.4285714285714
10 % 7 = 3
Use numbers only in the above variable assignments, not in the echo statements. You will need a third
variable as well. -->
<?php 
namespace Foundation;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 3</title>
</head>
<body style="margin-left: 20px">
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

$x = 10;
$y = 7;

$result = $x + $y;

echo '10 + 7 = ' . $result;

echo '<br>';

$result = $x - $y;

echo '10 - 7 = ' . $result;

echo '<br>';

$result = $x * $y;

echo "10 - 7 = $result";

echo '<br>';

$result = $x / $y;

echo "10 / 7 = $result";

echo '<br>';

$result = $x % $y;

echo "10 % 7 = $result";

?>
</body>
</html>