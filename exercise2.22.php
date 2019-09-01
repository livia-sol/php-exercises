<!-- Display PHP predefined variables showing also the information about each variable.
$GLOBALS: References all variables available in global scope.
$_SERVER: Server and execution environment information.
$_GET: HTTP GET variables.
$_POST: HTTP POST variables.
$_FILES: HTTP File Upload variables.
$_REQUEST: HTTP Request variables.
$_SESSION: Session variables.
$_ENV: Environment variables.
$_COOKIE: HTTP Cookies. -->
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2.2b (globals)</title>
</head>
<body style="margin-left: 20px">
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);


echo '<pre>';
var_dump($GLOBALS);//: References all variables available in global scope.
echo '<br>';
var_dump($_SERVER);//: Server and execution environment information.
/*echo($_GET);//: HTTP GET variables.
$_POST//: HTTP POST variables.
$_FILES//: HTTP File Upload variables.
$_REQUEST///: HTTP Request variables.
$_SESSION//: Session variables.
$_ENV//: Environment variables.
$_COOKIE//: HTTP Cookies.*/

?>
</body>
</html>