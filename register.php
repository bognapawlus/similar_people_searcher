<html lang="en">
<meta charset="utf-8">
<head>
<script type="text/javascript" src="http://latex.codecogs.com/latexit.js"></script>
<script type="text/javascript">
LatexIT.add('ml',true);
</script>
</head>
<?php
$myfil = fopen("style.txt", "r") or die("Unable to open file!");
echo fread($myfil,filesize("style.txt"));
fclose($myfil);
?> 



<body >




<h1 id="myHeader" class="czcionka1" >
Wyszukiwarka - wersja testowa</h1>


<div class="row">
  <div class="column side">
    
<?php
include 'siteleft.php';
?> 

      
   
    
  </div>
  
  <div class="column middle">
<div class="topnav1">
  <a id="gl1" href="index.php">Info</a>
  <a id="gl2" href="/wyszukiwarka/tematy/forum.php">Jak zacząć</a>
  <a id="gl4" class="active" href="register.php">Stwórz nowe konto</a>
  
</div>
    


<p id="pr2" class="czcionka3"> Zrób nowe konto </p>


<?php
if( (int)$_COOKIE["numer"] > -1 ) echo "Najpierw trzeba się wylogować.";
if( (int)$_COOKIE["numer"] ==-1 ) {
echo "<form action=\"create.php\" method=\"post\"> Nick: <input type=\"text\" name=\"name\"><br><br><br> Hasło: <input type=\"text\" name=\"pasw\"><br><br><br> Sposób kontaktu/mail/link do messengera/imię: <input type=\"text\" name=\"link\"><br><br><br> <input class=\"przes\" type=\"submit\"> </form>";
}
?>

<br><br>



  </div>
  
  <div class="column side">
<?php
include 'siteright.php';
?> 

  </div>



</body>
</html>
									