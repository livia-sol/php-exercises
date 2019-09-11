<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="description" content="practice">
	<title>Tema 6</title>
</head>
<body>

<?php 
require 'db.php';
// iteram prin books
// modificati pretul fiecarei carti cu 20% in plus
// salvati nou array intr-un json separat numit expensiveBooks.json

//var_dump($books);
if (!empty($books) && is_array($books)){


	for($i=0;$i<count($books);$i++) {//
		$books[$i]['price'] = number_format(1.2*$books[$i]['price'],2,".","");
	}
//var_dump($books);

//$obj = explode("\n", $books);
	$json_data=[];
	foreach ($books as $json => $value) {
		$json_data[] = json_encode($value,true)."\n";
		//json_encode(array_push($json_data, ($value."\n")),true);
	}
}
echo "<pre>".print_r($json_data,true);

file_put_contents('expensiveBooks.json', $json_data);
?>
</body>
</html>