<?php

echo "mój numer:" . (int)$_COOKIE["numer"];
echo "<br> komu udostępniam:" . $_POST["nrusera"];
$myid = (int)$_COOKIE["numer"];
$usid = $_POST["nrusera"];

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

      $sql = "SELECT id, nr" . $myid . " FROM statuss WHERE id='" . $usid . "'"; //wybierz id i mój numer kolumny
      $result = $conn->query($sql);
      
      $nrplusrows = "nr" . $myid;

        while($row = $result->fetch_assoc()) {
          $wartosc = $row[$nrplusrows];
        } //jaka wartość sprawdź
        
        
      if($wartosc == NULL){
      	$sql1 = "UPDATE statuss SET nr" . $myid . " = 1 WHERE id=" . $usid;
        $conn->query($sql1);
      	$sql2 = "UPDATE statuss SET nr" . $usid . " = 2 WHERE id=" . $myid;
        $conn->query($sql2);

      }

      if($wartosc == 2){
      	$sql1 = "UPDATE statuss SET nr" . $myid . " = 3 WHERE id=" . $usid;
        $conn->query($sql1);
      	$sql2 = "UPDATE statuss SET nr" . $usid . " = 3 WHERE id=" . $myid;
        $conn->query($sql2);

      }



      $conn->close();

header('Location: profil.php');
?>
