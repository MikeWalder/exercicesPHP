<?php
    class Voiture{
        private $marque;
        private $modele;
        private $couleur;
        private $nbPortes;
        private $estElectrique;
        private $prixTTC;

        const MINI = 3;
        const NORMAL = 5;
        const TVA = 20;

        //public static $voitures;

        public function __construct($marque, $modele, $couleur, $nbPortes, $estElectrique, $prixHT){
            $this->marque = $marque;
            $this->modele = $modele;
            $this->couleur = $couleur;
            $this->nbPortes = $nbPortes;
            $this->estElectrique = $estElectrique;
            $this->prixTTC = $prixHT + $prixHT * (self::TVA / 100);
            //self::$voitures[] = $this;
        }

        public function getMarque(){ return $this->marque; }
        public function setMarque($marque){ $this->marque = $marque;  }

        public function getModele(){ return $this->modele; }
        public function setModele($modele){ $this->modele = $modele; }

        public function getCouleur(){ return $this->couleur; }
        public function setCouleur($couleur){ $this->couleur = $couleur; }

        public function getnbPortes(){ return $this->nbPortes; }
        public function setnbPortes($nbPortes){ $this->nbPortes = $nbPortes; }

        public function getEstElectrique(){ return $this->estElectrique; }
        public function setEstElectrique($estElectrique){ $this->estElectrique = $estElectrique; }

        public function getPrix(){ return $this->prix; }
        public function setPrix($prix){ $this->prix = $prix; }

        public function afficherVoiture(){
            echo "<div class='affichageVoiture'>";
                echo "<b>Marque : </b>" . $this->marque . "<br>";
                echo "<b>Modèle : </b>" . $this->modele . "<br>";
                echo "<b>Couleur : </b>" . $this->couleur . "<br>";
                echo "<b>Nombre de portes : </b>" . $this->nbPortes . "<br>";
                if($this->electrique){
                    echo "<b>Voiture électrique : </b>OUI <br>";
                } else {
                    echo "Voiture électrique : NON <br>";
                }
                
            echo "</div><br><br>";
        }

        public function __toString(){
            $txt = "<div class='afficheVoiture'>";
                $txt .= "" . $this->marque . " " . $this->modele . ", couleur " . $this->couleur . "<br> ";
                $txt .= "" . $this->nbPortes . " portes<br> ";
                $txt .= $this->estElectrique ? "Voiture électrique<br>" : "Voiture non électrique<br>";
                $txt .= $this->prixTTC . "€ TTC<br>";
            $txt .= "</div>";
            return $txt;
        }
    }
?>