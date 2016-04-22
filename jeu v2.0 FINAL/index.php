<!DOCTYPE html>
<html>
    <head>
        <title>LIGHTS OUT ! GBL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/cssPrincipal.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header>
             
            <form action="zero.php" method="get" id="Param"  >
               
                <input type="number" name="largeur" placeholder="Largeur" class="boutonInput" min="0" max="64">
                <input type="number" name="hauteur" placeholder="Longueur" class="boutonInput" min="0" max="64">
                <button id="boutonOK" type="submit">OK</button>
               
            
             </form>
            <img src="images/title.png" id="title" />
            <form action="zero.php" method="get">
                <button type="submit"  id="first">Générer <br> Aléatoirement</button>
            </form>
            <div class="wrapsecond">
                <form action="personalisation.php" method="get">
                    <button type="submit"   id = "second">Prédéfinir le<br>tableau</button>

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
                        $light->next($largeur,$hauteur); //en fonction de la hauteur et de la largeur de la case précèdement coché, on change l'etat du tableau
                     }
                    $light->afficher();
                    $_SESSION["light"]= $light;  //on enregistre 
                    
                 }
                 else{
                     $light = new objet_tableau(5,5);  //création objet, tableau
                      $light->afficher();
                     $_SESSION["light"]= $light; //on enregistre 
                     
                 }
                 
                 $light->jeuVictoire()
                ?>
            
            
            
            
            
            
            
            </article>
        </section>
    </body>
</html>
