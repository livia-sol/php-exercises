<!DOCTYPE html>
<html>
<head>
	<title>Exercise 8.1</title>
</head>
<body style="margin-left: 20px">
<?php 
/*Exercise 8.1

Use a if-else-elseif-else construction and a query string with a parameter called day 
to change between the bellow

Laugh on Monday, laugh for danger. 
Laugh on Tuesday, kiss a stranger. 
Laugh on Wednesday, laugh for a letter.
Laugh on Thursday, something better.
Laugh on Friday, laugh for sorrow.
Laugh on Saturday, joy tomorrow.

No information for that day.

Day parameter not being set should not throw any error. 
Please make sure that the errors are not inhibited.
*/
ini_set('display_errors', 1);
error_reporting(E_ALL);

//$day=date('D', time());

//echo '<br /><br />The current day of the week is  '.$day.'<br /><br />';

$day='';
if(isset($_GET['day'])) $day = $_GET['day'];
//$day = isset($_GET['day']) ? $_GET['day'] : null;//?day=Monday in URL

if($day=='Monday')
	echo "Laugh on Monday, laugh for danger.";
elseif($day=='Tuesday')
	echo "Laugh on Tuesday, kiss a stranger.";
elseif($day=='Wednesday')
	echo "Laugh on Wednesday, laugh for a letter.";
elseif($day=='Thuesday')
	echo "Laugh on Thursday, something better.";
elseif($day=='Friday')
	echo "Laugh on Friday, laugh for sorrow.";
elseif ($day=='Saturday') 
	echo "Laugh on Saturday, joy tomorrow.";
else
	echo "No information for that day.";
?>
</body>
</html>