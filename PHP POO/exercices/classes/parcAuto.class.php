<?php

    class ParcAuto{
        private $nom;
        private $adresse;
        private $voitures;
    

        public function __construct($nom, $adresse){
            $this->nom = $nom;
            $this->adresse = $adresse;
        }

        public function ajouterVoitures($v){
            $this->voitures[] = $v;
        }

        public function afficherNomMarque($marque){
            echo "<span class='results'>Voici les résultats de la marque " . $marque . " :</span><br>";
            for($i = 0; $i < count($this->voitures); $i++){
                if($this->voitures[$i]->getMarque() === $marque){
                    echo $this->voitures[$i];
                }
            }
        }
    }
?>