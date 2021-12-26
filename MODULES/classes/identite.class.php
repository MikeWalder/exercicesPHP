<?php
    class Identite{
        private $nom;
        private $prenom;
        private $datePublication;
        public static $identities;

        public function __construct($nom, $prenom){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->datePublication = date("H:i:s");
            self::$identities[] = $this;
        }

        public function getNom(){ return $this->nom; }
        public function setNom($nom){ $this->nom = $nom; }

        public function getPrenom(){ return $this->prenom; }
        public function setPrenom($prenom){ $this->prenom = $prenom; }

        public function getDatePublication(){ return $this->datePublication; }

        public function __toString(){
            
                $txt = "<div class='infos'>";
                    $txt .= "- Nom : " . $this->nom . "<br>";
                    $txt .= "- Prénom : " . $this->prenom . "<br>";
                    $txt .= "- Publié à : " . $this->datePublication . "<br>";
                $txt .= "</div>";
            

            return $txt;
        }
    }




?>