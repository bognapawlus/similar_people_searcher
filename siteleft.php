<?php
$cookie_name = "numer";
$cookie_value = "-1";
if(!isset($_COOKIE[$cookie_name])) setcookie($cookie_name, $cookie_value);
?>


<p class="czcionka3"> Ankiety </p> 


<?php

if($_COOKIE["numer"] == "-1" || $_COOKIE["numer"] == "0" || !isset($_COOKIE["numer"])){
echo "brak ankiet, nie zalogowano <br> <br>";
}
else{
echo "<form method=\"get\" action=\"ankieta1.php\"> <button type=\"submit\" class=\"przes\">Ankieta1</button> </form>";




}


?>


<img src="strzala.png">
<b><p style="color: red; font-size: xx-large;">Tutaj zaczynamy</p></b>

Po założeniu konta wypełniamy ankietę, a potem przechodzimy do profilu.