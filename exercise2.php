<!-- For your second PHP exercise, echo the following statement to the browser:
“Twinkle, Twinkle little star.”
Next, create two variables, one for the word “Twinkle” and one for the word “star”. Echo the statement to the
browser, this time substituting the variables for the relevant words. Change the value of each variable to
whatever you like, and echo the statement a third time. -->
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2</title>
</head>
<body>
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
/*
Twinkle, Twinkle little star
*/
$twinkle="Thunder"; 
$star="elephant"; 


$var = "$twinkle, $twinkle little $star";

echo $var;

?>
</body>
</html>