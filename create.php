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
	    


	<p id="pr0" class="czcionka3"> Utworzono nowe konto!</p> 


	<p id="pr1" class="czcionka20"> Coś o nim: </p>

	<br> 


	<?php  
	$name2 = $_POST["name"];
	$pasw2 = $_POST["pasw"];
	$link2 = $_POST["link"];
	$nr2=-1;
	$check231 = 0;
	$i = 0;

	//sprawdź wolny numerek do logowania
	 	                            $xml = simplexml_load_file('users.xml');
		                  	     while($xml->user[$i]->check == "0"){
							$i++;
						}
	   	                            $xml->asXML('users.xml');


	//dodaj człowieka do users.xml

	if($name2 != ""){
	   include 'add_user_to_statuss.php'; //utwórz status do zaproszeń
	   $dom = new DomDocument();
	   $dom->load("users.xml");

		$root = $dom->documentElement;

		$node = $dom->createElement("user");

			$node0 = $dom->createElement("check", 0);
			$node1 = $dom->createElement("nr", $i);
			$node2 = $dom->createElement("nick", $name2);
			$node3 = $dom->createElement("pasw", $pasw2);
			$node4 = $dom->createElement("link", $link2);


			//tu jest dodawanie
			$node->appendChild($node0);
			$node->appendChild($node1);
			$node->appendChild($node2);
			$node->appendChild($node3);
			$node->appendChild($node4);

			$root->appendChild($node);


	   $dom->save("users.xml");
	}
	else {
	   echo "tej stronki nie wolno odswiezać <br><br>";
	}

	echo "<br><br> <b>Nick:</b> ";

	echo $name2;

	echo "<br> <br> <b>Password: </b>";

	echo $pasw2;

	echo "<br> <br> <b>Numer konta - TRZEBA GO ZAPAMIĘTAĆ: </b> ";

	echo $i;

	?>



	  </div>
	  
	  <div class="column side">
	<?php
	include 'siteright.php';
	?> 

	  </div>



</body>
</html>
									
