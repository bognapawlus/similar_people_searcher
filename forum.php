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
  <a id="gl2" class="active" href="#">Forum</a>
  <a id="gl4" href="register.php">Stwórz nowe konto</a>
  
</div>
    



<p id="pr0" class="czcionka3"> Tutaj można popisać</p> 


<p id="pr1" class="czcionka20"> Żeby popisać z fajnymi ludźmi.</p>
<br><br>



<br><br>



  </div>
  
  <div class="column side">
<?php
include 'siteright.php';
?> 

  </div>



</body>
</html>
									