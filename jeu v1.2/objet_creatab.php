<?php

class objet_creatab {
    public $hauteur;
    public $largeur;
    public $tableau;
   



    // Taille de la matrice constituant le monde
    // La matrice carrée

    // Constructeur d'un monde
    function __construct($hauteur, $largeur) {
        $this->hauteur= $hauteur; 
        $this->largeur= $largeur; 
        echo "<table>";
        for ($i=0; $i<$this->hauteur; $i++) {
            echo "<tr>";   
          for ($j=0; $j<$this->largeur; $j++) {
               echo" <td   >";
              $this->tableau[$i][$j]=0; 
              if($this->tableau[$i][$j]==1){echo "<a href=\"index.php?hauteur=$j&largeur=$i\"> <img src=\"allumer.png\" alt=\"HTML5 Icon\" style=\"width:58px;height:58px;\"> </a>";}
              else {echo "<a href=\"index.php?hauteur=$j&largeur=$i\"> <img src=\"eteint.png\" alt=\"HTML5 Icon\" style=\"width:58px;height:58px;\"> </a>";}
              echo "<td>";
             }      
              echo "</tr>";
         }
         echo " </table>";
    }

    // Affichage d'un monde faisant appel à l'affichage des cellules qui le composent
    function afficher() {
      echo "<table>";
        for ($i=0; $i<$this->hauteur; $i++) {
            echo "<tr>";   
          for ($j=0; $j<$this->largeur; $j++) {
               echo" <td   >";
              
              if($this->tableau[$i][$j]==1){echo "<a href=\"index.php?hauteur=$j&largeur=$i\"> <img src=\"allumer.png\" alt=\"HTML5 Icon\" style=\"width:58px;height:58px;\"> </a>";}
              else {echo "<a href=\"index.php?hauteur=$j&largeur=$i\"> <img src=\"eteint.png\" alt=\"HTML5 Icon\" style=\"width:58px;height:58px;\"> </a>";}
              echo "<td>";
             }      
              echo "</tr>";
         }
         echo " </table>";
    }
    
    
     function next($hauteur, $largeur) {
         
              $this->tableau[$hauteur][$largeur]=!$this->tableau[$hauteur][$largeur];
              
              
        
     }
    
    
}
