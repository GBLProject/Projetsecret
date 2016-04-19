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
                           $hauteur=10;
                           $largeur = 10;
                          
                           
                           for($n = 0 ;$n < $hauteur;$n++)
                           {
                           for ($i=0;$i<$largeur;$i++)
                           {
                              
                              $matrice[$n][$i]= 0; 
                            
                                echo " <a  href=\"index.php?hauteur = $i&largeur = $ n>"; // rends la case cliquable mais buf tjrs cf url
                                echo $matrice[$n][$i];
                                echo "</a> ";
                               
                           }
                           echo"<br/>";
                       }
                       }
                       creation_aff();
                        
                        ?>
                            
                     
        </body>
</html>
