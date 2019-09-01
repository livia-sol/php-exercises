<!DOCTYPE html>
<html>
<head>
	<title>Exercise 7.1</title>
</head>
<body style="margin-left: 50px">
<?php 

/*Exercise 7.1

Define variables $a as integer, $b as float, $c as string, $d as boolean, $e as array, $f as object.

Display each one of the above variables casted in a different data type.*/

echo "<pre>";
ini_set('display_errors', 1);
error_reporting(E_ALL);

// $a=10;
// echo '<br/> $a original: '; var_dump($a);              //I was trying to make something here :D.
// $a=(double)$a;
// echo '<br/> $a casted: '; var_dump($a);echo $a;

// $b=10.0;
// echo '<br/><br/> $b original: '; var_dump($b);
// $b=(int)$b;
// echo '<br/> $b casted: '; var_dump($b);echo $b;

// $c='text';
// echo '<br/><br/> $c original: '; var_dump($c);
// $c=(int)$c;
// echo '<br/> $c casted: '; var_dump($c);echo $c;

// $d=true;
// echo '<br/><br/> $d original: '; var_dump($d);
// $d=(int)$d;
// echo '<br/> $d casted: '; var_dump($d); echo $d;


// $e = array('0','1','2','3','4','5','6','7','8','9');
// echo '<br/><br/> $e: original'; var_dump($e);
// $e = (float)$e;
// echo '<br/> $e casted: '; var_dump($e);

// class obClass{};
// $f=new obClass();
// echo '<br/><br/> $f original: '; var_dump($f);
// $f = (boolean)$f;
// echo '<br/> $f casted: '; var_dump($f);

$a = 10;
$b = 3.5;
$c = 'this is a string';
$d = true;
$e = [
1,
2,
3,
4,
];
$f = new stdClass();
$startWith = 'a';
for($i=0;$i <=4;$i++)
{
$variable = $$startWith;
echo "------ start changing $startWith -------------------";
foreach(['int', 'float', 'string', 'boolean', 'array', 'object'] as $value)
{
echo '<pre style="border: 1px dashed grey;padding: 15px;">';
echo "Changing <b style='color: red'>$startWith</b> to <b style='color: blue'>$value</b> <br>";
settype($variable, $value);
var_dump($variable);
echo '</pre>';
}
echo "------ $startWith has changed -------------------<br><br>";
$startWith++;
}
?>
</body>
</html>