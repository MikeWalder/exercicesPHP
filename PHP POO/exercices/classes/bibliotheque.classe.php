<?php
    class Bibliotheque{
        private $bds;
        private $policiers;
        private $romans;

        /* public function __construct($titre, $auteur){
            $this->titre = $titre;
            $this->auteur = $auteur;
        } */

        /* public function ajouterLivres($livre){
            $this->romans[] = $livre;
        } */

        public function __construct(){

        }

        public function ajouterGenreLivre($genreLivre){
            if($genreLivre->getGenre() === "bd"){
                $this->bds[] = $genreLivre;
            } else if($genreLivre->getGenre() === "policier"){
                $this->policiers[] = $genreLivre;
            } else if($genreLivre->getGenre() === "roman"){
                $this->romans[] = $genreLivre;
            } 
            
        }

        public function __toString(){
            $txt = "<div class='bibliotheque'>";
                $txt .= "<b>********** ROMANS **********</b><br>";
                for($i = 0; $i < count($this->romans); $i++){
                    $txt .= $this->romans[$i] . "<br>";
                }
                $txt .= "<b>********** BDS **********</b><br>";
                for($i = 0; $i < count($this->bds); $i++){
                    $txt .= $this->bds[$i] . "<br>";
                }
                $txt .= "<b>********** POLICIERS **********</b><br>";
                for($i = 0; $i < count($this->policiers); $i++){
                    $txt .= $this->policiers[$i] . "<br>";
                }
            $txt .= "</div>";
            return $txt;
        }
    }
?>