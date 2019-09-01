	<!DOCTYPE html>
	<html>
	<head>
		<title>Exercise 8</title>
	</head>
	<body style="margin-left: 20px">
		<?php 
	/*Exercise 8

	In this PHP exercise, you will use a conditional statement to determine what gets printed to the browser. Write a script that gets the current month in a variable and prints one of the following responses, depending on whether it's August or not:

	It’s August, so it's really hot.
	Not August, so at least not in the peak of the heat.

	Hint: the function to get the current month is 'date('F', time())' for the month's full name. Because current month is not actually August change the evaluation to verify if the variable equals April instead of August.
	*/
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	//echo "It’s August, so it's really hot.".'<br />'."
	//Not August, so at least not in the peak of the heat.";

	$month=date('F', time());

	//echo '<br /><br />The current month is  '.$month.'<br /><br />';

	if($month=='August')
		echo "It’s August, so it's really hot.";
	else
		echo "Not August, so at least not in the peak of the heat.";

	echo '<br/><br/>';

	if($month=='April')
		echo "It’s April, so it isn't really hot.";
	else
		echo "It is not April.";

	?>
</body>
</html>