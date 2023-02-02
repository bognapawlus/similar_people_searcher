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
  <a id="gl1" class="active" href="#home">Info</a>
  <a id="gl2" href="/wyszukiwarka/tematy/forum.php">Jak zacząć</a>
  <a id="gl4" href="register.php">Stwórz nowe konto</a>
  
</div>
    



<p id="pr0" class="czcionka3"> O co tu chodzi?</p> 


<p id="pr1" class="czcionka20"> Strona wyszukuje podobnych ludzi, którym później udostępnia wzajemnie do siebie kontakt, żeby mogli razem porozmawiać.
Po założeniu konta wypełniamy ankietę, a później na profilu widzimy osoby, które wypełniły ją w najbardziej zbliżony do nas sposób. </p>
<br><br>


<p id="pr2" class="czcionka3"> Strona testowa</p> 


<p id="pr3" class="czcionka20"> Nie ma tu prawdziwych kont (jedynie kilka testowych). Można testować, zakładać dowolną liczbę kont, wpisywać dowolne rzeczy. </p>
<br><br>

<a href="http://bpawlus.j.pl/"><p style="text-align:center"> Bogna Pawlus - powrót do strony głównej</p></a>


  </div>
  
  <div class="column side">
<?php
include 'siteright.php';
?> 

  </div>



</body>
</html>
									