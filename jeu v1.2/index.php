<!DOCTYPE html>
<html>
    <head>
        <title>Lights Out</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
    </head>
        <body>
                <a  href="zero.php"><input type="button" value="Bouton"/></a>   #bouton temporaire pour remettre a zero le tableau...
                </br>


                <?php
                 require_once "./objet_tableau.php";
                session_start();
                if (isset($_SESSION["light"])) {    #si il existe deja une session
                    $light = $_SESSION["light"];  
                    
                    if (filter_input_array(INPUT_GET)) {  #on recupère la position de la case précédement coché
                        $hauteur = htmlspecialchars(trim(filter_input(INPUT_GET, "hauteur")));
                        $largeur = htmlspecialchars(trim(filter_input(INPUT_GET, "largeur")));
                        $light->next($largeur,$hauteur); //en fonction de la hauteur et de la largeur de la case précèdement coché, on change l'etat du tableau
                     }
                    $light->afficher();
                    $_SESSION["light"]= $light;  //on enregistre 
                 }
                 else{
                     $light = new objet_tableau(5,5);  //création objet, tableau
                     $_SESSION["light"]= $light; //on enregistre 
                     
                 }

                
                ?>
                            
                     
        </body>
</html>
