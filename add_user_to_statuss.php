<?php
//to tworzy nową kolumnę i wiersz w statuss

$servername = "xxx.pl";
$username = "xxx";
$password = "xxx";
$dbname = "xxx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nlicz = "SELECT id FROM statuss";
$result = $conn->query($nlicz);
$nw = $result->num_rows;
$nw = $nw + 1;


$sql = "INSERT INTO statuss VALUES();";
$sql1 = "ALTER TABLE statuss ADD nr" . $nw . " int;";
$sql2 = "UPDATE statuss SET nr" . $nw . " = -1 WHERE id=" . $nw . ";";




if ($conn->query($sql) === FALSE) {
  echo "!!!!zle!!!!";
} 
if ($conn->query($sql1) === FALSE) {
  echo "!!!!zle2";
} 
if ($conn->query($sql2) === FALSE) {
  echo "!!!!zle3";
} 

$conn->close();

?>	
