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
                        
                       function creation_aff(){
                           
                        echo "<table>";
                        for ($i=0; $i<10; $i++) {
                            echo "<tr>";   
                          for ($j=0; $j<10; $j++) {
                              echo" <td>";
                                $tableau[$i][$j]=rand(0,1);
                               // echo "<form action=\"./index.php\" method=\"get\">";
                                echo " <a  href=\"index.php?hauteur=$j&largeur=$i \> ";
                                echo  $tableau[$i][$j];
                                echo "</a>";
                               // echo "<form>";
                              echo "</td>";
                             }      
                              echo "</tr>";
                         }
                         echo " </table>";
                       }
                        creation_aff()
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
