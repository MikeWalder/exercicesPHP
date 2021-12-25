<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 12</title>
    <style>
        .afficheVoiture {
            color: cornflowerblue;
            font-size: 1.5em;
            padding: 2vh 0 0 3vw;
        }
        .bibliotheque{
            color: crimson;
            font-size: 1.8em;
            padding-left: 2.8vw;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>

    <h1>Des objets dans des objets</h1>
    <h2>Exercice 12 : classe Livre</h2>
    <h3>Ecriture du code :</h3>
    <pre>
    <h3><b>Fichier livre.classe.php</b></h3><br>
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
            echo "< div class='affichageLivre'>" . $this->titre . ", " . $this->nbPages . " pages, couverture " .$this->couleurCouverture . ", " . $this->affichageTrad($this->estTradEnAnglais) . "< /div>< br>"; 
        }

        private function affichageTrad($traduction){
            if($traduction == false){
                return "non traduit en anglais";
            } else if($traduction == true){
                return "traduit en anglais";
            }
        }

        public function __toString(){
            $txt = "< div class='afficheLivre'>";
                $txt .= "Titre : " . $this->titre . "< br>";
                $txt .= "Pages : " . $this->nbPages . "< br>";
                $txt .= "Genre : " . $this->genre . "< br>";
                $txt .= "Couleur couverture : " . $this->couleurCouverture . "< br>";
                $txt .= "Traduction anglaise : ";
                $txt .= $this->estTradEnAnglais ? "Oui< br>" : "Non< br>";
            $txt .= "< /div>";
            return $txt;
        }
    }

    <hr>
    <h3><b>Fichier bibliotheque.classe.php</b></h3><br>

    class Bibliotheque{
        private $bds;
        private $policiers;
        private $romans;

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
            $txt = "< div class='bibliotheque'>";
                $txt .= "< b>********** ROMANS **********< /b>< br>";
                for($i = 0; $i < count($this->romans); $i++){
                    $txt .= $this->romans[$i] . "< br>";
                }
                $txt .= "< b>********** BDS **********< /b>< br>";
                for($i = 0; $i < count($this->bds); $i++){
                    $txt .= $this->bds[$i] . "< br>";
                }
                $txt .= "< b>********** POLICIERS **********< /b>< br>";
                for($i = 0; $i < count($this->policiers); $i++){
                    $txt .= $this->policiers[$i] . "< br>";
                }
            $txt .= "< /div>";
            return $txt;
        }
    }

    <hr>
    <h3><b>Instanciation des classes et résultats</b></h3>
    require("classes/bibliotheque.classe.php");
    require("classes/livre.classe.php");

    $livre1 = new Livre("L'algorithmique selon H2Prog", 500, "roman", "noire", true);
    $livre2 = new Livre("Le virus asiatique", 350, "roman", "rouge", false);
    $livre3 = new Livre("La France du 19ème siècle", 56, "bd", "bleu", true);
    $livre4 = new Livre("Les Vikings", 32, "bd", "orange", true);
    $livre5 = new Livre("L'affaire des rhésus jaunes", 268, "policier", "bleu", true);


    $biblioABC = new Bibliotheque();
    $biblioABC->ajouterGenreLivre($livre1);
    $biblioABC->ajouterGenreLivre($livre2);
    $biblioABC->ajouterGenreLivre($livre3);
    $biblioABC->ajouterGenreLivre($livre4);
    $biblioABC->ajouterGenreLivre($livre5);

    echo $biblioABC;
    <hr>
    </pre>
    <h3>Résultat : </h3>
    <?php

        require("classes/bibliotheque.classe.php");
        require("classes/livre.classe.php");

        $livre1 = new Livre("L'algorithmique selon H2Prog", 500, "roman", "noire", true);
        $livre2 = new Livre("Le virus asiatique", 350, "roman", "rouge", false);
        $livre3 = new Livre("La France du 19ème siècle", 56, "bd", "bleu", true);
        $livre4 = new Livre("Les Vikings", 32, "bd", "orange", true);
        $livre5 = new Livre("L'affaire des rhésus jaunes", 268, "policier", "bleu", true);


        $biblioABC = new Bibliotheque();
        $biblioABC->ajouterGenreLivre($livre1);
        $biblioABC->ajouterGenreLivre($livre2);
        $biblioABC->ajouterGenreLivre($livre3);
        $biblioABC->ajouterGenreLivre($livre4);
        $biblioABC->ajouterGenreLivre($livre5);

        echo $biblioABC;

    ?>
</body>
</html>