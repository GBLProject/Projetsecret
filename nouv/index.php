<!DOCTYPE html>
<html>
    <head>
        <title>Lights Out</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
    </head>
        <body>
        
        
                        
                      
                        
                        <?php
                        
                       
                        echo "<table>";
                        for ($i=0; $i<10; $i++) {
                            echo "<tr>";   
                          for ($j=0; $j<10; $j++) {
                              echo" <td>";
                              $tableau[$i][$j]=rand(0,1);
                              echo  $tableau[$i][$j];
                              /*$aleatoire = rand(0,10);
                                if($aleatoire > 2){echo 1;}
                                else{ echo 0;}
                               
                               */
                              
                              
                              echo "</td>";
                             }      
                                  echo "</tr>";
                         }
                         echo " </table>";
                       
                        
                        /*
                        session_start();
                        if (isset($_SESSION["light"])) {
                            $light = $_SESSION["light"]; 
                         }
                         else{
                             $terre = new Monde(5,5);
                             $_SESSION["light"]= $light;  
                         }
                        
                        $terre->afficher();
                        $terre->tourSuivant();
                        $_SESSION["terre"]= $terre;
                        
                        */
                       
                        
                        
                        ?>
                            
                     
        </body>
</html>