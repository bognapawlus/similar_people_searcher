<?php

$nr4 = (int)$_POST["nr1"];
$pasw3 = $_POST["pasw1"]; //wpisanehaslo


$xml = simplexml_load_file('users.xml');
if($xml->user[$nr4]->pasw == $pasw3){ 
	echo "ok";
	setcookie("numer", $nr4);
}
$xml->asXML('users.xml');


header('Location: index.php');

?>