<?php

$nr4 = (int)$_POST["nr1"];
$pasw3 = $_POST["pasw1"];



$xml = simplexml_load_file('users.xml');

	echo "ok";
	setcookie("numer", -1);
$xml->asXML('users.xml');


header('Location: index.php');

?>