<!DOCTYPE html>

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



<body onload="sortTable()">




<h1 id="myHeader" class="czcionka1" >
Wersja testowa</h1>


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
  <a id="gl4" href="register.php">Zrób nowe konto</a>
  



</div>
    



<p id="pr2" class="czcionka3"> Twój profil</p>

W drugiej kolumnie znajduje się różnica waszych wyników, która musi być z przedziału [0, 600]. Im mniejsza różnica, tym lepiej danej osobie udostępnić link.

<br>
<br>

Tu można udostępnić kontakt do siebie innym, najlepiej tym z najmniejszą różnicą i niedawną datą wypełnienia ankiety.

<br><br>

<b>Osoby z najbardziej podobnym wynikiem:</b>


<br> <br>
<?php include('sort1.php') ?>


  </div>
  
  <div class="column side">
<?php
include 'siteright.php';
?> 

  </div>


<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 0; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      //check if the two rows should switch place:
      if (Number(x.innerHTML) > Number(y.innerHTML)) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>


  
</body>
</html>