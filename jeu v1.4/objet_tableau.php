<?php



// Un monde est l'univers du jeu de la vie, composé d'organismes constituant une
// matrice qui se met à jour selon les règles de naissance et de mort des organismes
// en fonction de leurs voisins directs



class objet_tableau {
    public $hauteur;
    public $largeur;
    public $tableau;
   



    // Taille de la matrice constituant le monde
    // La matrice carrée

    // Constructeur d'un monde
    function __construct($hauteur, $largeur) {
        $this->hauteur= $hauteur; 
        $this->largeur= $largeur; 
        for ($i=0; $i<$this->hauteur; $i++) {  
          for ($j=0; $j<$this->largeur; $j++) {
              $this->tableau[$i][$j]=rand(0,1); 
              
             }    
         }
    }
    

    // Affichage d'un monde faisant appel à l'affichage des cellules qui le composent
    function afficher() {
      echo "<table>";
        for ($i=0; $i<$this->hauteur; $i++) {
            echo "<tr>";   
          for ($j=0; $j<$this->largeur; $j++) {
               echo" <td   >";
              
              if($this->tableau[$i][$j]==1){echo "<a href=\"index.php?hauteur=$j&largeur=$i\"> <img src=\"images/allumer.png\" alt=\"HTML5 Icon\" style=\"width:58px;height:58px;\"> </a>";}
              else {echo "<a href=\"index.php?hauteur=$j&largeur=$i\"> <img src=\"images/eteint.png\" alt=\"HTML5 Icon\" style=\"width:58px;height:58px;\"> </a>";}
              echo "<td>";
             }      
              echo "</tr>";
         }
         echo " </table>";
    }
    
    
     function next($hauteur, $largeur) {
         
              $this->tableau[$hauteur][$largeur]=!$this->tableau[$hauteur][$largeur];
              if($hauteur<$this->hauteur-1){
                  $this->tableau[$hauteur+1][$largeur]=!$this->tableau[$hauteur+1][$largeur];
              }
               if($hauteur>0){
                  $this->tableau[$hauteur-1][$largeur]=!$this->tableau[$hauteur-1][$largeur];
              }
               if($largeur<$this->largeur-1){
                  $this->tableau[$hauteur][$largeur+1]=!$this->tableau[$hauteur][$largeur+1];
              }
               if($largeur>0){
                  $this->tableau[$hauteur][$largeur-1]=!$this->tableau[$hauteur][$largeur-1];
              }
              
        
     }
     
     function personnalise($hauteur, $largeur) {
         
              $this->tableau[$hauteur][$largeur]=!$this->tableau[$hauteur][$largeur];
     }
     function afficher_personnalise() {
      echo "<table>";
        for ($i=0; $i<$this->hauteur; $i++) {
            echo "<tr>";   
          for ($j=0; $j<$this->largeur; $j++) {
               echo" <td   >";
              
              if($this->tableau[$i][$j]==1){echo "<a href=\"personalisation.php?hauteur=$j&largeur=$i\"> <img src=\"images/allumer.png\" alt=\"HTML5 Icon\" style=\"width:58px;height:58px;\"> </a>";}
              else {echo "<a href=\"personalisation.php?hauteur=$j&largeur=$i\"> <img src=\"images/eteint.png\" alt=\"HTML5 Icon\" style=\"width:58px;height:58px;\"> </a>";}
              echo "<td>";
             }      
              echo "</tr>";
         }
         echo " </table>";
    }
    
}
