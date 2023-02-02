<!DOCTYPE html>
<?php

 	                            $xml = simplexml_load_file('answers.xml');
                                    $i = (int)$_COOKIE["numer"];
                                    $licz = 0;
                                    //szukam moich odpowiedzi
                                    while($xml->odp[$licz]->nr != $i){ 
                                          $licz++;
                                    } 
                                    // teraz licz to moj numerek w answers.xml

                                    
									for($ijk = 0; $ijk <=24; $ijk++){
										$myans[$ijk] = $xml->odp[$licz]->pyt[$ijk];
										$mywaz[$ijk] = $xml->odp[$licz]->waz[$ijk];		
                                        }


                                    //tu się zaczyna tabelka
                                    
                                   echo "<table id=\"myTable\">";



									//tu są różnice między odpowiedziami innych
                                    $nrus = 0;  //nr klatki usera w answers.xml, nie zwykły nr usera
                                    while($xml->odp[$nrus]){
                                        $licz2 = 0; $suma = 0;
                                        for($jkl = 0; $jkl <=24; $jkl++){ 
                                            $difans[$jkl] = $xml->odp[$nrus]->pyt[$jkl]; //odpowiedz innego usera
                                            $difwaz[$jkl] = $xml->odp[$nrus]->waz[$jkl]; //waznosc innego usera

                                            $suma = $suma + abs($difans[$jkl]-$myans[$jkl]) * ($mywaz[$jkl]+$difwaz[$jkl]); 
                                        }

                                        echo "<tr><td><br><br><br> User nr:";
                                        echo $xml->odp[$nrus]->nr; //tu jest nr usera
                                        $nrdoudst = (int)$xml->odp[$nrus]->nr;
                                        echo "<br> </td><td>";
                                        echo $suma; //tu jest różnica
                                        echo "</td><td> ";
                                        echo $xml->odp[$nrus]->data;
                                        
                                        //tu sprawdź moją kolumnę w statuss, żeby wiedzieć co w 4 linii
                                        
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
                                                  
                                                  $myid = (int)$_COOKIE["numer"]; //moje id
                                                  $usid = $nrdoudst; //to nr usera

                                                  $sql = "SELECT id, nr" . $myid . " FROM statuss WHERE id='" . $usid . "'"; //wybierz id(user) i mój numer kolumn
                                                  $result = $conn->query($sql);
                                                  
                                                  $nrplusrows = "nr" . $myid;

                                                    while($row = $result->fetch_assoc()) {
                                                      $sprawdz = $row[$nrplusrows];
                                                    } //jaka wartość sprawdź




                                                  $conn->close();
                                        
                                        
                                       	if($sprawdz == NULL){
                                            echo "</td> <td><form action=\"udst.php\" method=\"post\">";
                                            echo "Użytkownik nr:";
                                            echo "<input type=\"text\" id=\"nrusera\" name=\"nrusera\" value=$nrdoudst><br>";
                                            echo "<input type=\"submit\" value=\"Udostępnij swój link\">";
                                            echo "</form> </td></tr>";
                                         }
                                         if($sprawdz == -1){
                                           echo "</td> <td> <i><b><p style=\"color: blue; font-size: large;\">To jest twoje konto, czyli różnica to 0.</p></b></i> </td></tr>";
                                         }
                                         if($sprawdz == 1){
                                           echo "</td> <td> <i><b><p style=\"color: #ff8000; font-size: large;\"> Już udostępniono linka. </p></b></i> <br> Czekamy na akceptację twojego zaproszenia.</td></tr>";
                                         }
                                       	if($sprawdz == 2){
                                            echo "</td> <td><form action=\"udst.php\" method=\"post\">";
                                            echo "<i><b><p style=\"color: red; font-size: large;\">Użytkownik już wysłał Ci zaproszenie. </p></b></i><br> Możesz odpowiedzieć na nie i też udostępnić linka. <br> Użytkownik nr:";
                                            echo "<input type=\"text\" id=\"nrusera\" name=\"nrusera\" value=$nrdoudst><br>";
                                            echo "<input type=\"submit\" value=\"Odpowiedz na zaproszenie\">";
                                            echo "</form> </td></tr>";
                                         }
                                         if($sprawdz == 3){ //wyjmij nicka nrdoudst i jego link
                                           echo "</td> <td> <i><b><p style=\"color: #27AE60; font-size: large;\"> Już macie kontakt do siebie. </p></b></i><br>";
                                           $xml1 = simplexml_load_file('users.xml');
                                           echo "Nick użytkownika to: " . $xml1->user[$nrdoudst]->nick . "<br>";
                                           echo "Kontakt do użytkownika: " . $xml1->user[$nrdoudst]->link . "<br>";
                                           $xml1->asXML('users.xml');
                                           echo "</td></tr>";
                                         }
                                         
                                         
                                        $nrus++;
				    }

										//tu sie konczy tableka
                                        echo "</table>";
                                        
   	                            $xml->asXML('answers.xml');



?>
