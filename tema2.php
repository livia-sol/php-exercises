<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="description" content="practice">
	<title>Tema 2</title>
</head>
<body>
<?php 

require 'db.php';

// iteram prin books
// totalul si avg de la ex 1 din tema sa le grupam pe ani (published_date)

function afteryear($year){
	global $books; $sum=$count=$count_books=0;
	if (!empty($books) && is_array($books)){
		foreach ($books as $key => $value) {
			if(date('Y', strtotime($value['published_date']))==$year){
				$count_books++;
				if($value['price']!='0')
				{
					$sum+=$value['price'];$count++;
				}
			} 
		}
	}
	return $lista=array($sum, $count, $count_books);
}
$arr = afteryear(2018);
list($sum1, $count1, $count_books1) = $arr;
echo "Total price of ".$count1." books from 2018 is ".$sum1." and average of prices is ".number_format(($sum1/$count1),2,","," ").".<br>";

$arr = afteryear(2019);
list($sum2, $count2, $count_books2) = $arr;
echo "Total price of ".$count2." books from 2019 is ".$sum2." and average of prices is ".number_format(($sum2/$count2),2,","," ").".<br>";
?>
</body>
</html>