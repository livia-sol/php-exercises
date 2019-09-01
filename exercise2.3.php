<!-- Display PHP predefined constants.
__FILE__, for example, returns the name of the file currently being read by the PHP engine
__LINE__ returns the line number of the file.
__DIR__ represents only the path to the file
__CLASS__ returns the name of the current class
__FUNCTION__ returns the name of the current function
__METHOD__ represents the name of the current method
__NAMESPACE__ returns the name of the current namespace -->
<?php 
namespace Foundation;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2.3 (globals - predefined constants)</title>
</head>
<body style="margin-left: 20px">
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);


echo __FILE__;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __DIR__;
echo '<br>';

class AltaDenumire
{
	function __construct()
	{
		echo __CLASS__;	
	}

	function ometoda()
	{
		echo '<br>';
		echo __METHOD__ ;
		echo '<br>';
	}
}

$x = new AltaDenumire;

$x->ometoda();

echo '<br>';

function ofunctie()
{
	echo __FUNCTION__ ;
}

ofunctie();

echo '<br>';

echo __NAMESPACE__;


?>
</body>
</html>