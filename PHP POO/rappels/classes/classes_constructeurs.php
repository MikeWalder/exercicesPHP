<?php

    class Personnage{
        public $nom;
        public $prenom;
        public $age;
        public $recherche;
        public $prime;
        public $img;

        function __construct($nom, $prenom, $age, $recherche, $prime, $img){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->age = $age;
            $this->recherche = $recherche;
            $this->prime = $prime;
            $this->img = $img;
        }

        public function afficheDatas(){
            echo "<div class='container'>";
                echo "Nom : " . $this->nom . "<br>";
                echo "Prénom : " . $this->prenom . "<br>";
                echo "Âge : " . $this->age . "<br>";
                $this->avisRecherche($this->recherche, $this->prime);
                echo "<img src='" . $this->img . "'>";
            echo "</div>";
        }
        public function avisRecherche($recherche, $prime){
            if($recherche === "true"){
                echo "Personnage recherché ! Prime de " . $prime . "$<br>";
            }
        }
    }

?>
