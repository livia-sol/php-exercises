<?php 

// cititi datele din books.json si stocati-le intr-un array $contents

if(file_exists('books.json')){
	$json_file = file_get_contents('books.json');//preia continutul json-ului

	echo '<pre>';
	//var_dump($json_file);

	$del = "\n";

	$obj = explode($del, $json_file);

	//var_dump($obj);

	$books = [];

	foreach($obj as $json){
		$el = json_decode($json, true);
		
		$error_json = json_last_error();

		if(!$error_json){
			$books[] = $el;
		} else {
			switch ($error_json) {
		        case JSON_ERROR_NONE:
		            echo ' - No errors';
		        break;
		        case JSON_ERROR_DEPTH:
		            echo ' - Maximum stack depth exceeded';
		        break;
		        case JSON_ERROR_STATE_MISMATCH:
		            echo ' - Underflow or the modes mismatch';
		        break;
		        case JSON_ERROR_CTRL_CHAR:
		            echo ' - Unexpected control character found';
		        break;
		        case JSON_ERROR_SYNTAX:
		            echo ' - Syntax error, malformed JSON';
		        break;
		        case JSON_ERROR_UTF8:
		            echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
		        break;
		        default:
		            echo ' - Unknown error';
		        break;
   			}
		}

		 //$el = json_decode($json);	
		 //var_dump($el->id);

		//die();
	}
} else {
	die('Fisierul nu exista');
}

//echo "<pre>";
//var_dump($books);

//$obj = json_decode($json_file);

//var_dump($obj);