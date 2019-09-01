<!DOCTYPE html>
<html>
<head>
	<title>Exercise 8.2</title>
</head>
<body style="margin-left: 20px">
<?php 
/*Exercise 8.2

From age 0 to 21 display the bellow

If you are 1 you are a baby

If you are between 1 and 3 you are a toddler

If you are between 3 and 5 you are a preschooler

If you are between 5 and 12 you are a grade-schooler

If you are between 12 and 18 you are a teenager

If you are between 18 and 21 you are an young adult

Please solve this using and iteration from 0 to 21 if, elseif and else. 
Pay attention that you should display the same statement once for if-elseif-else and once for switch.
*/
ini_set('display_errors', 1);
error_reporting(E_ALL);



// for($i=0;$i<=21;$i++)
// 	if($i<=1)
// 		echo "The age of $i years is for a baby.<br />";
// 	elseif($i>1&&$i<=3)
// 		echo "The age of $i years is for a toddler.<br />";
// 	elseif($i>3&&$i<=5)
// 		echo "The age of $i years is for a preschooler.<br />";
// 	elseif($i>5&&$i<=12)
// 		echo "The age of $i years is for a grade-schooler.<br />";
// 	elseif($i>12&&$i<=18)
// 		echo "The age of $i years is for a teenager.<br />";
// 	elseif($i>18&&$i<=21)
// 		echo "The age of $i years is for an young adult.<br />";
// echo '<br />';

for($i=0;$i<=21;$i++){
	switch ($i) {
		case '1':
			echo 'If you are 1 you are a baby<br />';
			break;
		case '3':
			echo "If you are between 1 and 3 you are a toddler<br />";
			break;
		case '5':
			echo "If you are between 3 and 5 you are a preschooler<br />";
			break;
		
		case '12':
			echo "If you are between 5 and 12 you are a grade-schooler<br />";
			break;
		
		case '18':
			echo "If you are between 12 and 18 you are a teenager<br />";
			break;
		case 21:
			echo "If you are between 18 and 21 you are an young adult<br />";
			break;
	}
}
echo '<br />';
echo 'Auther solution:<br /><br />';
$age=0;
switch ($age) {
		case '0':
			$age++;
		case '1':
			{echo 'If you are 1 you are a baby<br />';
			$age++;}
		case '2':
			$age++;
		case '3':
			{echo "If you are between 1 and 3 you are a toddler<br />";
			$age++;}
		case '4':
			$age++;
		case '5':
			{echo "If you are between 3 and 5 you are a preschooler<br />";
			$age++;}
		case '6':
			$age++;
		case '7':
			$age++;
		case '8':
			$age++;
		case '9':
			$age++;
		case '10':
			$age++;
		case '11':
			$age++;
		case '12':
			{echo "If you are between 5 and 12 you are a grade-schooler<br />";
			$age++;}
		case '13':
			$age++;
		case '14':
			$age++;
		case '15':
			$age++;
		case '16':
			$age++;
		case '17':
			$age++;
		case '18':
			{echo "If you are between 12 and 18 you are a teenager<br />";
			$age++;}
		case '19':
			$age++;
		case '20':
			$age++;
		case '21':
			{echo "If you are between 18 and 21 you are an young adult<br />";
			break;}
	}

?>
</body>
</html>