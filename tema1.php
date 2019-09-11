<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="description" content="practice">
	<title>Tema 1</title>
</head>
<body>

<?php 

require 'db.php';
// iteram prin books
// facem un total pentru price
// facem si un avg pentru price

//var_dump($books);
$total_price=0;$count=0;
if (!empty($books) && is_array($books)){

	for($i=0;$i<sizeof($books);$i++){
	//echo "<pre> $i. ".$books[$i]['price']."<br>";
		if($books[$i]['price']!= 0){
		//echo $books[$i]['price']."<br>";
			$total_price+=$books[$i]['price'];
			$count++;
		}
	}
}
//echo $count;
echo "Total price of books is: ".$total_price."<br>";
echo "The average of books prices is: ".number_format(($total_price/$count),2,".","")."<br>";
?>
</body>
</html>