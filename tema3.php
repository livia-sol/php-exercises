<?php 
require 'db.php';
require 'tema2.php';
// afiseaza intr-un tabel nr de carti publicate in fiecare an
// afiseaza intr-un tabel nr de carti publicate in fiecare luna din acel an

function count_after_months($year){
	global $books;
	if (!empty($books) && is_array($books)){
		$months= array('January' => 0,'February' => 0,'March' => 0,'April' => 0, 'May' => 0,'June' => 0, 'July' => 0, 'August' => 0, 'September' => 0, 'October' => 0,'November' => 0, 'December' => 0 );
		foreach ($books as $key => $value) {
		//echo date('F',strtotime($value['published_date']))."<br>";
			if(date('Y',strtotime($value['published_date']))==$year){
				$m = date('F',strtotime($value['published_date']));
				$months[$m]++;
			}
		}
	}
	return $months;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="description" content="practice">
	<title>Tema 2&3</title>
</head>
<body>

<h3>Number of books on years</h3>
<table border="1px solid black" cellspacing="0">
	<thead>
		<th>2018</th>
		<th>2019</th>
	</thead>
	<tbody>
		<td><?php echo $count_books1; ?></td>
		<td><?php echo $count_books2; ?></td>
	</tbody>
</table>

<h3>Number of books on months in 2018</h3>
<table border="1px solid black" cellspacing="0">
	<?php 
	$months = count_after_months(2018);
	foreach ($months as $key => $value) {
		if($value!=0){
	 ?><tr>
		<th><?php echo $key; ?></th>
		<td><?php echo $value; ?></td></tr>
	<?php
		} 
	} 
	?>
</table>

<h3>Number of books on months in 2019</h3>
<table border="1px solid black" cellspacing="0">
	<?php 
	$months = count_after_months(2019);
	foreach ($months as $key => $value) {
		if($value!=0){
	 ?><tr>
		<th><?php echo $key; ?></th>
		<td><?php echo $value; ?></td></tr>
	<?php
		} 
	} 
	?>
</table>
</body>
</html>