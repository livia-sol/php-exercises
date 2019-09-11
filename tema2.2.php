<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="description" content="practice">
	<title>Tema 2.2</title>
</head>
<body>
<?php 

require 'db.php';

// iteram prin books
// totalul si avg de la ex 1 din tema sa le grupam pe ani (published_date)
// $year = date('Y', strtotime($books[0]['published_date']));
// $arr=[];$countt=[];$sum=[];
// foreach ($books as $key => $value) {
// 	if($value['price']	!= 0){
// 		//$arr[$value['published_date']] []= $value;
// 		$year = date('Y', strtotime($value['published_date']));
// 		$arr[$year][] = $value;
// 		$countt[$year]++;
// 		$sum[$year]+=$value['price'];
// 	}
// }
// echo "<pre> Books:".print_r($arr,true); echo "<br>";
// echo "<pre> Number of books on years:<br>".print_r($countt,true); echo "<br>";
// echo "<pre> Total price on every year:<br>".print_r($sum,true); echo "<br>";
// foreach ($sum as $key => $value) {
// 	echo "For the year ".$key." the average of books is: ".number_format(($sum[$key]/$countt[$key]),2,",","")."<br>";
// }

$arr=$c=$s=[];$count=$sum=0;
if (!empty($books) && is_array($books)){
	foreach ($books as $key => $value) {
		$year = date('Y', strtotime($value['published_date']));
		$arr[$year][] = $value;
	}
}
	//echo "<pre> Books:".print_r($arr,true); echo "<br>";

if (!empty($books) && is_array($books)){
	foreach ($arr as $year) {
		foreach ($year as $k => $v){
			if($v['price']!=0){
				$count++;
				$sum+=$v['price'];
			}
		}
		$c[]=$count;$s[]=$sum;
		$count=$sum=0;	
	}
}
$s=array_reverse($s);
$c=array_reverse($c);


//echo "<pre> Number of books on years:<br>".print_r($c,true); echo "<br>";
//echo "<pre> Total price on every year:<br>".print_r($s,true); echo "<br>";
foreach ($s as $key => $value) {
	echo "For the year ".(date('Y')-$key)." total price is ".$s[$key]." and  the average of books prices is: ".number_format(($s[$key]/$c[$key]),2,",","")."<br>";
}


?>
</body>
</html>