<!DOCTYPE html>
<html>
<head>
	<title>Exercise 3</title>
</head>
<body style="margin-left: 20px">
<?php 

		/*3. Scrieti o functie care sa afiseze data curenta

Functia trebuie sa aiba un parametru default setat pe 0

Daca parametrul este trimis, trebuie sa fie un numar. (functia is_number)

In functie de parametru functia va afisa data curenta + nr de zile

Exeplu: daca azi suntem in 14.04.2019, si parametrul trimis este 5, va afisa 19.04.2019*/

ini_set('display_errors', 1);
error_reporting(E_ALL);	

$n_days=311;
after_days($n_days);

function after_days($n=0){
	$current_day = date("d");
	$current_year = date("Y");
	$current_month = date("F");
	echo "Current day is ".$current_day."'th of the month $current_month in the year $current_year.";
	echo "<hr>";
	$day_after=$n+$current_day; 
			// $number = cal_days_in_month(CAL_GREGORIAN, 5, 2019);
			// echo $number;
			// $day = $number - $day_after;
			// echo $day;			
			// echo date("$day-$m-Y");
			//echo (date("t") - date("d"))."<br>";

			// if($day_after >(date("t") - date("d"))){
			// 	$day_next_month = abs($day_after - date("t"));
			// 	$next_month = date("m",strtotime("next month"));
			// 	echo date("$day_next_month.$next_month.Y");
			// }
			// else echo date("$day_after.m.Y"); // alte variante, dar incomplete valabile pentru un numar de zile limitate la luna urmatoare

			//echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
	echo(date("d.m.Y", strtotime("now + {$day_after} days")) . "<br>");
}	
?>
</body>
</html>