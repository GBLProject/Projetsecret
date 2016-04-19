<?php

require_once "./Organisme.php";

// Un monde est l'univers du jeu de la vie, composé d'organismes constituant une
// matrice qui se met à jour selon les règles de naissance et de mort des organismes
// en fonction de leurs voisins directs



class Monde {
    public $hauteur;
    public $largeur;
    public $tableau;
   



    // Taille de la matrice constituant le monde
    // La matrice carrée

    // Constructeur d'un monde
    function __construct($hauteur, $largeur) {
        $this->hauteur= $hauteur; 
        $this->largeur= $largeur; 
        
        for ($i=0; $i<$largeur; $i++) {
            for ($j=0; $j<$hauteur; $j++) {
                $this->tableau[$j][$i]= new Organisme((bool)rand(0,1));
                echo "
                
                ";
            }      
            echo "<hr/>";
        }
    }

    // Affichage d'un monde faisant appel à l'affichage des cellules qui le composent
    function afficher() {
        for ($i=0; $i< $this->hauteur; $i++) {
            for ($j=0; $j<$this->largeur; $j++) {
                echo" ";
                $this->tableau[$i][$j]->afficher();
            }  
            echo "<br/>";
        }
    }
    
    
    
}
