<?php
    class Livre{
        private $titre;
        private $nbPages;
        private $genre;
        private $couleurCouverture;
        private $estTradEnAnglais;

        public function __construct($nom, $nb, $genre, $couleur, $traduction){
            $this->titre = $nom;
            $this->nbPages = $nb;
            $this->genre = $genre;
            $this->couleurCouverture = $couleur;
            $this->estTradEnAnglais = $traduction;
        }

        public function changerCouleur($couleur){
            $this->couleurCouverture = $couleur;
        }

        public function traductionAnglaise(){
            $this->estTradEnAnglais == true;
        }

        public function ajouterPages($nbAjouter){
            $this->nbPages += $nbAjouter;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function setGenre($genre){
            $this->genre = $genre;
        }

        public function afficherLivre(){
            echo "<div class='affichageLivre'>" . $this->titre . ", " . $this->nbPages . " pages, couverture " .$this->couleurCouverture . ", " . $this->affichageTrad($this->estTradEnAnglais) . "</div><br>"; 
        }

        private function affichageTrad($traduction){
            if($traduction == false){
                return "non traduit en anglais";
            } else if($traduction == true){
                return "traduit en anglais";
            }
        }

        public function __toString(){
            $txt = "<div class='afficheLivre'>";
                $txt .= "Titre : " . $this->titre . "<br> ";
                $txt .= "Pages : " . $this->nbPages . "<br> ";
                $txt .= "Genre : " . $this->genre . "<br>";
                $txt .= "Couleur couverture : " . $this->couleurCouverture . "<br>";
                $txt .= "Traduction anglaise : ";
                $txt .= $this->estTradEnAnglais ? "Oui<br>" : "Non<br>";
            $txt .= "</div>";
            return $txt;
        }
    }

?>