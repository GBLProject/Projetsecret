<!DOCTYPE html>
<html>
    <head>
        <title>LIGHTS OUT ! GBL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/cssPrincipal.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
    </head>
    <body>
        <header>
            
            <div id="Param">
                <input type="number" name="largeur" placeholder="Largeur" class="boutonInput" min="0" max="64">
                <input type="number" name="longueur" placeholder="Longueur" class="boutonInput" min="0" max="64">
            </div>
            <button id="boutonOK">OK</button>
            <img src="images/title.png" id="title" />
            <form action="zero.php" method="get">
                <button type="submit"  id="first">Générer <br> Aléatoirement</button>
            </form>
            <div class="wrapsecond">
                <form action="index.php" method="get">
                    <button type="submit"   id = "second">Validé le<br>tableau</button>

                </form>
            </div>

            
        </header>
        <section id="wrapper">
            <article id="jeu">
            
            
            
            
                
                <?php
                 require_once "./objet_tableau.php";
                session_start();
                if (isset($_SESSION["light"])) {    #si il existe deja une session
                    $light = $_SESSION["light"];  
                    
                    if (filter_input_array(INPUT_GET)) {  #on recupère la position de la case précédement coché
                        $hauteur = htmlspecialchars(trim(filter_input(INPUT_GET, "hauteur")));
                        $largeur = htmlspecialchars(trim(filter_input(INPUT_GET, "largeur")));
                        $light->personnalise($largeur,$hauteur); //en fonction de la hauteur et de la largeur de la case précèdement coché, on change l'etat du tableau
                     }
                    $light->afficher_personnalise();
                    $_SESSION["light"]= $light;  //on enregistre 
                 }
                 else{
                     $light = new objet_tableau(5,5);  //création objet, tableau
                      $light->afficher_personnalise();
                     $_SESSION["light"]= $light; //on enregistre 
                     
                 }

                
                ?>
            
            
            
            
            
            
            
            </article>
        </section>
    </body>
</html>
