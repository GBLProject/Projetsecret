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
         <div id="bravo">Bravo ! tu as réussi!</div>
        <section id="wrapper">
            <article id="jeu">
            
           
            
            <img src="images/stalone.jpg" id="imageVictoire" alt="HTML5 Icon" style="width:584px;height:500px;">
            
            
            
            
            
            </article>
        </section>
    </body>
</html>
