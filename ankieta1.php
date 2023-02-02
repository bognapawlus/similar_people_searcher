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
	<a id="gl4" href="register.php">Stwórz nowe konto</a> 
	</div>
	    


	<p id="pr2" class="czcionka3"> Ankieta1?</p>



	<form action="wyniki1.php" method="post">
	    Jak odpowiadać:<br>
	<br>
	    Wszędzie wpisujemy liczbę całkowitą z zakresu 1-7, taką żeby jak najbardziej odpowiadała jednej z podanych dwóch opcji.
	<br>
	    Jeżeli chcesz zaznaczyć coś pomiędzy - wpisz 4. Potem wybieramy jak bardzo istotne wydaje nam się pytanie.
	<br><br>
	    Na podstawie tej ankiety strona pokaże osoby, które wypełniły ją w najbardziej zbliżony do nas sposób.

	<br><br>
	    Po pewnym czasie warto wypełnić ankietę od nowa.

	<br><br>
	   


	<br><br><br>

	    0. Starajmy się być dla siebie mili
	    <br>
	    Tak -> 1
	    <br>
	    Eeeee tam -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans0" ><br>
	      <input type="radio" name="ww0" value=0>Nieważne
	      <input type="radio" name="ww0" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww0" value=2>Istotne<br><br><br>
	    <br><br><br>

	    1. Rozmowa:
	    <br>
	    bardzo spokojna -> 1
	    <br>
	    musi coś się w niej dziać bardzo ciekawego -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans1" ><br>
	      <input type="radio" name="ww1" value=0>Nieważne
	      <input type="radio" name="ww1" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww1" value=2>Istotne
	    <br><br><br>

	    2. W rozmowie
	    <br>
	    bardzo duży szacunek -> 1
	    <br>
	    jak coś nie tak, to wygarnąć od razu -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans2" ><br>
	      <input type="radio" name="ww2" value=0>Nieważne
	      <input type="radio" name="ww2" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww2" value=2>Istotne
	    <br><br><br>

	    3. Podchodzisz do tej przyszłej rozmowy:
	    <br>
	    bardziej na żarty -> 1
	    <br>
	    poważniej, może będzie nowy znajomy-> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans3" ><br>
	      <input type="radio" name="ww3" value=0>Nieważne
	      <input type="radio" name="ww3" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww3" value=2>Istotne
	    <br><br><br>

	    4. Bardziej chcesz w tej rozmowie:
	    <br>
	    Pożartować sobie -> 1
	    <br>
	    Porozmawiać o istotniejszych kwestiach -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans4" ><br>
	      <input type="radio" name="ww4" value=0>Nieważne
	      <input type="radio" name="ww4" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww4" value=2>Istotne
	    <br><br><br>

	    5. Taka rozmowa będzie prawdopodobnie
	    <br>
	    Jakaś zwykła -> 1
	    <br>
	    Bardzo stresująco męcząca -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans5" ><br>
	      <input type="radio" name="ww5" value=0>Nieważne
	      <input type="radio" name="ww5" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww5" value=2>Istotne
	    <br><br><br>

	    6. Chcę rozmowę
	    <br>
	    Typową -> 1
	    <br>
	    Taką ekscytującą -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans6" ><br>
	      <input type="radio" name="ww6" value=0>Nieważne
	      <input type="radio" name="ww6" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww6" value=2>Istotne
	    <br><br><br>

	    7. Chcę popisać
	    <br>
	    Tak przez chwilę -> 1
	    <br>
	    Dłużej -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans7" ><br>
	      <input type="radio" name="ww7" value=0>Nieważne
	      <input type="radio" name="ww7" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww7" value=2>Istotne
	    <br><br><br>

	    8. Przewiduję, że
	    <br>
	    Taki sposób komunikacji będzie mnie wkurzać i niewiele wyjdzie -> 1
	    <br>
	    Będzie raczej w porządku -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans8" ><br>
	      <input type="radio" name="ww8" value=0>Nieważne
	      <input type="radio" name="ww8" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww8" value=2>Istotne
	    <br><br><br>

	    9. Wymyślenie pierwszego wspólnego tematu do rozmowy/kontunuowanie i podtrzymywanie rozmowy
	    <br>
	    Żebym tylko ja nie musiał* -> 1
	    <br>
	    No mogę coś wymyślić i jakoś pójdzie-> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans9" ><br>
	      <input type="radio" name="ww9" value=0>Nieważne
	      <input type="radio" name="ww9" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww9" value=2>Istotne
	    <br><br><br>

	    10. Chcę
	    <br>
	    Tak tylko sobie porozmawiać dla przyjemności -> 1
	    <br>
	    Dowiedzieć się czegoś ciekawego, co mnie choć trochę rozwinie-> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans10" ><br>
	      <input type="radio" name="ww10" value=0>Nieważne
	      <input type="radio" name="ww10" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww10" value=2>Istotne
	    <br><br><br>

	    11. W dyskusji o różnych istotnych sprawach dla ludzkości
	    <br>
	    Dojdźmy za wszelką cenę do prawdy -> 1
	    <br>
	    Przede wszystkim czujmy się dobrze -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans11" ><br>
	      <input type="radio" name="ww11" value=0>Nieważne
	      <input type="radio" name="ww11" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww11" value=2>Istotne
	    <br><br><br>

	    12. Spamik i nic nie znaczące wiadomości emotki
	    <br>
	    Absolutnie nie -> 1
	    <br>
	    Jasne, super -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans12" ><br>
	      <input type="radio" name="ww12" value=0>Nieważne
	      <input type="radio" name="ww12" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww12" value=2>Istotne
	    <br><br><br>

	    13. Jak już dojdzie to tej rozmowy
	    <br>
	    Starajmy się i piszmy już coś sensownego -> 1
	    <br>
	    Piszmy byle co -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans13" ><br>
	      <input type="radio" name="ww13" value=0>Nieważne
	      <input type="radio" name="ww13" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww13" value=2>Istotne
	    <br><br><br>

	    14. Small talki (czyli tematy mające nie wywoływać większych emocji: <br> co studiujesz? / ładna dzisiaj pogoda / hej, co robisz? / co lubisz jeść? )
	    <br>
	    Zdecydowanie tak -> 1
	    <br>
	    Zdecydowanie nie -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans14" ><br>
	      <input type="radio" name="ww14" value=0>Nieważne
	      <input type="radio" name="ww14" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww14" value=2>Istotne
	    <br><br><br>

	    15. Drugą osobę wyraźnie zainteresowało coś, o czym mówiłeś i zadaje dużo pytań, żebyś coś więcej powiedział o sobie.
	    <br>
	    Nie chcę tak -> 1
	    <br>
	    Chcę tak -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans15" ><br>
	      <input type="radio" name="ww15" value=0>Nieważne
	      <input type="radio" name="ww15" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww15" value=2>Istotne
	    <br><br><br>

	    16. Rozmowy o planach i pomysłach, niekoniecznie realnych, typu "fajnie byłoby gdyby"
	    <br>
	    Nie chcę -> 1
	    <br>
	    Chcę -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans16" ><br>
	      <input type="radio" name="ww16" value=0>Nieważne
	      <input type="radio" name="ww16" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww16" value=2>Istotne
	    <br><br><br>

	    17. Powkurzanie tej drugiej osoby (dla zabawy)
	    <br>
	    Ok -> 1
	    <br>
	    Nie ok -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans17" ><br>
	      <input type="radio" name="ww17" value=0>Nieważne
	      <input type="radio" name="ww17" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww17" value=2>Istotne
	    <br><br><br>


	    18. Druga osoba wyświetliła i nie odpisała
	    <br>
	    To straszne i się martwię -> 1
	    <br>
	    Niezbyt mnie to obchodzi -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans18" ><br>
	      <input type="radio" name="ww18" value=0>Nieważne
	      <input type="radio" name="ww18" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww18" value=2>Istotne
	    <br><br><br>

	    19. Porozmawiajmy o ważniejszych i trudnych tematach
	    <br>
	    Tylko o tym -> 1
	    <br>
	    W ogóle nie o tym -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans19" ><br>
	      <input type="radio" name="ww19" value=0>Nieważne
	      <input type="radio" name="ww19" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww19" value=2>Istotne
	      <br><br><br>

	    20. Gdybyś wypełniał* tą ankietę za parę dni, odpowiedzi byłyby inne
	    <br>
	    Zdecydowanie inne -> 1
	    <br>
	    Zdecydowanie takie same-> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans20" ><br>
	      <input type="radio" name="ww20" value=0>Nieważne
	      <input type="radio" name="ww20" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww20" value=2>Istotne
	    <br><br><br>


	    21. Pożartujmy, powygłupiajmy się i pozaczepiajmy
	    <br>
	    Zdecydowanie tak -> 1
	    <br>
	    Zdecydowanie nie -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans21" ><br>
	      <input type="radio" name="ww21" value=0>Nieważne
	      <input type="radio" name="ww21" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww21" value=2>Istotne
	    <br><br><br>

	    22. Chcę popisać z kimś, kto myśli logicznie
	    <br>
	    Zdecydowanie tak -> 1
	    <br>
	    Przeżyję jakoś, jak nie -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans22" ><br>
	      <input type="radio" name="ww22" value=0>Nieważne
	      <input type="radio" name="ww22" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww22" value=2>Istotne
	    <br><br><br>

	    23. Przypuszczam, że ta rozmowa
	    <br>
	    Nie wpłynie na mnie jakoś bardzo-> 1
	    <br>
	    Może wpłynąć i może być ważna -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans23" ><br>
	      <input type="radio" name="ww23" value=0>Nieważne
	      <input type="radio" name="ww23" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww23" value=2>Istotne
	    <br><br><br>

	    24. W tej rozmowie 
	    <br>
	    Ostrożnie, nie znamy się, uważajmy co piszemy -> 1
	    <br>
	    Nie wydaje mi się, żeby trzeba było jakoś ostrożniej pisać -> 7
	    <br>
	    Odpowiedź: <input type="number" name="ans24" ><br>
	      <input type="radio" name="ww24" value=0>Nieważne
	      <input type="radio" name="ww24" value=1 checked>Nomalne pytanie
	      <input type="radio" name="ww24" value=2>Istotne
	    <br><br><br><br><br><br>



	 Wyślij i przejdź do profilu:   
	    <input type="submit" class="przes">
	    </form>


	<br><br>



	  </div>
	  
	  <div class="column side">
	<?php
	include 'siteright.php';
	?> 

	  </div>



</body>
</html>
									
