<?php

$ww[0] = (int)$_POST["ww0"];
$ans[0] = (int)$_POST["ans0"];
$ww[1] = (int)$_POST["ww1"];
$ans[1] = (int)$_POST["ans1"];
$ww[2] = (int)$_POST["ww2"];
$ans[2] = (int)$_POST["ans2"];
$ww[3] = (int)$_POST["ww3"];
$ans[3] = (int)$_POST["ans3"];
$ww[4] = (int)$_POST["ww4"];
$ans[4] = (int)$_POST["ans4"];
$ww[5] = (int)$_POST["ww5"];
$ans[5] = (int)$_POST["ans5"];
$ww[6] = (int)$_POST["ww6"];
$ans[6] = (int)$_POST["ans6"];
$ww[7] = (int)$_POST["ww7"];
$ans[7] = (int)$_POST["ans7"];
$ww[8] = (int)$_POST["ww8"];
$ans[8] = (int)$_POST["ans8"];
$ww[9] = (int)$_POST["ww9"];
$ans[9] = (int)$_POST["ans9"];

$ww[10] = (int)$_POST["ww10"];
$ans[10] = (int)$_POST["ans10"];
$ww[11] = (int)$_POST["ww11"];
$ans[11] = (int)$_POST["ans11"];
$ww[12] = (int)$_POST["ww12"];
$ans[12] = (int)$_POST["ans12"];
$ww[13] = (int)$_POST["ww13"];
$ans[13] = (int)$_POST["ans13"];
$ww[14] = (int)$_POST["ww14"];
$ans[14] = (int)$_POST["ans14"];
$ww[15] = (int)$_POST["ww15"];
$ans[15] = (int)$_POST["ans15"];
$ww[16] = (int)$_POST["ww16"];
$ans[16] = (int)$_POST["ans16"];
$ww[17] = (int)$_POST["ww17"];
$ans[17] = (int)$_POST["ans17"];
$ww[18] = (int)$_POST["ww18"];
$ans[18] = (int)$_POST["ans18"];
$ww[19] = (int)$_POST["ww19"];
$ans[19] = (int)$_POST["ans19"];

$ww[20] = (int)$_POST["ww20"];
$ans[20] = (int)$_POST["ans20"];
$ww[21] = (int)$_POST["ww21"];
$ans[21] = (int)$_POST["ans21"];
$ww[22] = (int)$_POST["ww22"];
$ans[22] = (int)$_POST["ans22"];
$ww[23] = (int)$_POST["ww23"];
$ans[23] = (int)$_POST["ans23"];
$ww[24] = (int)$_POST["ww24"];
$ans[24] = (int)$_POST["ans24"];


echo $ans[0];
echo "<br>";
echo $ww[0];
echo "<br>";
echo $ans[1];
echo "<br>";
echo $ww[1];
echo "<br>";
echo $ans[2];
echo "<br>";
echo $ww[2];
echo "<br>";
echo $ans[3];
echo "<br>";
echo $ww[3];
echo "<br>";
echo $ans[4];
echo "<br>";
echo $ww[4];
echo "<br>";
echo $ans[5];
echo "<br>";
echo $ww[5];
echo "<br>";
echo $ans[6];
echo "<br>";
echo $ww[6];
echo "<br>";
echo $ans[7];
echo "<br>";
echo $ww[7];
echo "<br>";
echo $ans[8];
echo "<br>";
echo $ww[8];
echo "<br>";
echo $ans[9];
echo "<br>";
echo $ww[9];
echo "<br>";

echo $ans[10];
echo "<br>";
echo $ww[10];
echo "<br>";
echo $ans[11];
echo "<br>";
echo $ww[11];
echo "<br>";
echo $ans[12];
echo "<br>";
echo $ww[12];
echo "<br>";
echo $ans[13];
echo "<br>";
echo $ww[13];
echo "<br>";
echo $ans[14];
echo "<br>";
echo $ww[14];
echo "<br>";
echo $ans[15];
echo "<br>";
echo $ww[15];
echo "<br>";
echo $ans[16];
echo "<br>";
echo $ww[16];
echo "<br>";
echo $ans[17];
echo "<br>";
echo $ww[17];
echo "<br>";
echo $ans[18];
echo "<br>";
echo $ww[18];
echo "<br>";
echo $ans[19];
echo "<br>";
echo $ww[19];
echo "<br>";


echo $ans[20];
echo "<br>";
echo $ww[20];
echo "<br>";
echo $ans[21];
echo "<br>";
echo $ww[21];
echo "<br>";
echo $ans[22];
echo "<br>";
echo $ww[22];
echo "<br>";
echo $ans[23];
echo "<br>";
echo $ww[23];
echo "<br>";
echo $ans[24];
echo "<br>";
echo $ww[24];

$data = date("d.m.Y, H:i:s");

                                   //to jest część do sprawdzania czy już wypełniona ankieta kiedyś
                                   $ijj=0;
                                   $spr=-1;

 	                            $xml = simplexml_load_file('answers.xml');
                          	    while($xml->odp[$ijj]){
				        if((int)$xml->odp[$ijj]->nr == (int)$_COOKIE["numer"]){
                                         	$spr = $ijj;
                                                       for($wyp = 0; $wyp < 25; $wyp++){
                                                             $xml->odp[$ijj]->data = $data;
                                                             $xml->odp[$ijj]->pyt[$wyp] = $ans[$wyp];
                                                             $xml->odp[$ijj]->waz[$wyp] = $ww[$wyp];
                                                       }

                                                break;
                                        }
                                      $ijj++;
			            }
   	                            $xml->asXML('answers.xml');


if($spr == -1){
   $dom = new DomDocument();
   $dom->load("answers.xml");

	$root = $dom->documentElement;

	$node = $dom->createElement("odp");


		$node000 = $dom->createElement("nr", $_COOKIE["numer"]);

		$nodedata = $dom->createElement("data", $data);

		$node0x = $dom->createElement("pyt", $ans[0]);
		$node1x = $dom->createElement("pyt", $ans[1]);
		$node2x = $dom->createElement("pyt", $ans[2]);
		$node3x = $dom->createElement("pyt", $ans[3]);
		$node4x = $dom->createElement("pyt", $ans[4]);
		$node5x = $dom->createElement("pyt", $ans[5]);
		$node6x = $dom->createElement("pyt", $ans[6]);
		$node7x = $dom->createElement("pyt", $ans[7]);
		$node8x = $dom->createElement("pyt", $ans[8]);
		$node9x = $dom->createElement("pyt", $ans[9]);
		$node10x = $dom->createElement("pyt", $ans[10]);
		$node11x = $dom->createElement("pyt", $ans[11]);
		$node12x = $dom->createElement("pyt", $ans[12]);
		$node13x = $dom->createElement("pyt", $ans[13]);
		$node14x = $dom->createElement("pyt", $ans[14]);
		$node15x = $dom->createElement("pyt", $ans[15]);
		$node16x = $dom->createElement("pyt", $ans[16]);
		$node17x = $dom->createElement("pyt", $ans[17]);
		$node18x = $dom->createElement("pyt", $ans[18]);
		$node19x = $dom->createElement("pyt", $ans[19]);
		$node20x = $dom->createElement("pyt", $ans[20]);
		$node21x = $dom->createElement("pyt", $ans[21]);
		$node22x = $dom->createElement("pyt", $ans[22]);
		$node23x = $dom->createElement("pyt", $ans[23]);
		$node24x = $dom->createElement("pyt", $ans[24]);

		$node0 = $dom->createElement("waz", $ww[0]);
		$node1 = $dom->createElement("waz", $ww[1]);
		$node2 = $dom->createElement("waz", $ww[2]);
		$node3 = $dom->createElement("waz", $ww[3]);
		$node4 = $dom->createElement("waz", $ww[4]);
		$node5 = $dom->createElement("waz", $ww[5]);
		$node6 = $dom->createElement("waz", $ww[6]);
		$node7 = $dom->createElement("waz", $ww[7]);
		$node8 = $dom->createElement("waz", $ww[8]);
		$node9 = $dom->createElement("waz", $ww[9]);
		$node10 = $dom->createElement("waz", $ww[10]);
		$node11 = $dom->createElement("waz", $ww[11]);
		$node12 = $dom->createElement("waz", $ww[12]);
		$node13 = $dom->createElement("waz", $ww[13]);
		$node14 = $dom->createElement("waz", $ww[14]);
		$node15 = $dom->createElement("waz", $ww[15]);
		$node16 = $dom->createElement("waz", $ww[16]);
		$node17 = $dom->createElement("waz", $ww[17]);
		$node18 = $dom->createElement("waz", $ww[18]);
		$node19 = $dom->createElement("waz", $ww[19]);
		$node20 = $dom->createElement("waz", $ww[20]);
		$node21 = $dom->createElement("waz", $ww[21]);
		$node22 = $dom->createElement("waz", $ww[22]);
		$node23 = $dom->createElement("waz", $ww[23]);
		$node24 = $dom->createElement("waz", $ww[24]);



		//tu jest dodawanie dzieci
                $node->appendChild($nodedata);
		$node->appendChild($node000);
		$node->appendChild($node0x);
		$node->appendChild($node1x);
		$node->appendChild($node2x);
		$node->appendChild($node3x);
		$node->appendChild($node4x);
		$node->appendChild($node5x);
		$node->appendChild($node6x);
		$node->appendChild($node7x);
		$node->appendChild($node8x);
		$node->appendChild($node9x);
		$node->appendChild($node10x);
		$node->appendChild($node11x);
		$node->appendChild($node12x);
		$node->appendChild($node13x);
		$node->appendChild($node14x);
		$node->appendChild($node15x);
		$node->appendChild($node16x);
		$node->appendChild($node17x);
		$node->appendChild($node18x);
		$node->appendChild($node19x);
		$node->appendChild($node20x);
		$node->appendChild($node21x);
		$node->appendChild($node22x);
		$node->appendChild($node23x);
		$node->appendChild($node24x);

		$node->appendChild($node0);
		$node->appendChild($node1);
		$node->appendChild($node2);
		$node->appendChild($node3);
		$node->appendChild($node4);
		$node->appendChild($node5);
		$node->appendChild($node6);
		$node->appendChild($node7);
		$node->appendChild($node8);
		$node->appendChild($node9);
		$node->appendChild($node10);
		$node->appendChild($node11);
		$node->appendChild($node12);
		$node->appendChild($node13);
		$node->appendChild($node14);
		$node->appendChild($node15);
		$node->appendChild($node16);
		$node->appendChild($node17);
		$node->appendChild($node18);
		$node->appendChild($node19);
		$node->appendChild($node20);
		$node->appendChild($node21);
		$node->appendChild($node22);
		$node->appendChild($node23);
		$node->appendChild($node24);

		$root->appendChild($node);


   $dom->save("answers.xml");
}

header('Location: index.php');


?>