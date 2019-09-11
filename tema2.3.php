<?php 
require "db.php";

$year = array();
$avg = array();
$count_perYear=array();

foreach ($books as $key => $value) {
	$date= date('Y',strtotime ($value['published_date']));

	if (! isset ($year[$date])) {
		$year[$date] = null;
		$count_perYear[$date] = null;
		$avg[$date] = null;
		
	} 
	if( $value['price']!=0){
		$year[$date] += $value['price'];
		$count_perYear[$date]++;
	} 	
}

print_r($year);
echo "<br>";
print_r($count_perYear);

foreach ($year as $key => $value){
	$avg[$key] = $year[$key]/$count_perYear[$key];
	echo "Average of ".$key." year is ".number_format($avg[$key],2,",","")."<br>";
}
// echo "<br>";
// print_r($avg);


