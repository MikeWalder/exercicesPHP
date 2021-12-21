<?php
    class Panier{

        private static $prochainIdentifiant = 1;

        private $identifiant;
        private $pommes = [];
        private $cerises = [];
        private $bananes = [];

        public function __construct(){
            $this->identifiant = self::$prochainIdentifiant;
            self::$prochainIdentifiant++;
        }

        public function addFruit($fruit){
            if($fruit->getNom() === Fruits::POMME){
                $this->pommes[] = $fruit;
            }
            else if ($fruit->getNom() === Fruits::CERISE){
                $this->cerises[] = $fruit;
            }
            else if($fruit->getNom() === Fruits::BANANE){
                $this->bananes[] = $fruit;
            }
        }

        public function __toString(){
            $affichage = "<p class='blue'>Voici le contenu du panier " . $this->identifiant . "</p><br><br>";
            $affichage .= "<div class='card'>";
            foreach ($this->pommes as $pomme){
                $affichage .= $pomme;
            }
            foreach($this->cerises as $cerise){
                $affichage .= $cerise;
            }
            foreach($this->bananes as $banane){
                $affichage .= $banane;
            }
            $affichage .= "</div>";
            return $affichage;
        }

        public function getIdentifiant(){
            return $this->identifiant;
        }
    }
?>