
<?php
require_once "./objet_tableau.php";
session_start();
     
$light = $_SESSION["light"];  

if (filter_input_array(INPUT_GET)) {  #on recupère la position de la case précédement coché
    $hauteur = htmlspecialchars(trim(filter_input(INPUT_GET, "hauteur")));
    $largeur = htmlspecialchars(trim(filter_input(INPUT_GET, "largeur")));
 
   
    $light = new objet_tableau($hauteur,$largeur);
    $_SESSION["light"]= $light;
    
}
 else{
     
     $light = new objet_tableau($light->hauteur,$light->largeur);
     $_SESSION["light"]= $light;
 }


header("location: ./index.php");