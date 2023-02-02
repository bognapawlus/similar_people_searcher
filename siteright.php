<?php

if($_COOKIE["numer"] == "-1" || $_COOKIE["numer"] == "0"){


echo "<p id=\"aaa1\" class=\"czcionka3\"> Tu będzie kiedyś twoje konto </p> ";

echo    "<form action=\"logowanie.php\" method=\"post\">";
echo "Numer konta: <input type=\"number\" name=\"nr1\"><br><br><br>";
echo "Hasło: <input type=\"text\" name=\"pasw1\"><br><br><br>";
echo   "<input type=\"submit\" class=\"przes\" value=\"Zaloguj\">";
echo "</form>";

}

else{
//gdy jesteś zalogowan

 echo "<b><p style=\"font-size: large; text-align: center;\">ID: " . $_COOKIE["numer"];
$numerek = (int)$_COOKIE["numer"];
 echo "</p></b><br>";

echo "<img src=\"buzia.png\" width=\"150\">";

echo "<br>";

                                    echo "<b><p class=\"czcionka25\" style=\"text-align: center;\">";
 	                            $xml = simplexml_load_file('users.xml');
				    echo $xml->user[$numerek]->nick;
   	                            $xml->asXML('users.xml');
 
                                   echo "</p></b>";

echo "<br><br>";
echo    "<form action=\"profil.php\" >";
echo   "<input type=\"submit\" class=\"przes\" value=\"Profil\">";
echo "<br>Profil jest dostępny tylko dla osób, które wypełniły ankietę (po lewej stronie). Znajdują się tam porównania do innych.<br>";
echo "</form>";

echo "<br><br>";
                                   
echo "<br><br>";
echo    "<form action=\"logout.php\" >";
echo   "<input type=\"submit\" class=\"przes\" value=\"Wyloguj\">";
echo "</form>";
}

?>	

