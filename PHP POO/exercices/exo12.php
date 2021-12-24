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

        public static $voitures;

        public function __construct($marque, $modele, $couleur, $nbPortes, $estElectrique, $prixHT){
            $this->marque = $marque;
            $this->modele = $modele;
            $this->couleur = $couleur;
            $this->nbPortes = $nbPortes;
            $this->estElectrique = $estElectrique;
            $this->prixTTC = $prixHT + $prixHT * (self::TVA / 100);
            self::$voitures[] = $this;
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

        public static function afficherNomMarque($marque){
            echo "< span class='results'>Voici les résultats de la marque " . $marque . " :< /span>< br>";
            for($i = 0; $i < count(self::$voitures); $i++){
                if(self::$voitures[$i]->getMarque() === $marque){
                    echo self::$voitures[$i];
                }
            }
        }

        public function __toString(){
            $txt = "< div class='afficheVoiture'>";
                $txt .= "" . $this->marque . " " . $this->modele . ", couleur " . $this->couleur . "< br> ";
                $txt .= "" . $this->nbPortes . " portes< br> ";
                $txt .= $this->estElectrique ? "Voiture électrique< br>" : "Voiture non électrique< br>";
                $txt .= $this->prixTTC . "€ TTC< br>";
            $txt .= "< /div>";
            return $txt;
        }
    }
    
    $v1 = new voiture("Yotota", "Ryas", "noir", Voiture::MINI, true, 18500);
    $v2 = new voiture("Yotota", "Risau", "rouge", Voiture::NORMAL, false, 15500);
    $v2->setNbPortes(3);
    $v3 = new voiture("Troen", "5C", "rouge", Voiture::MINI, true, 16500);

    for($i = 0; $i < count(Voiture::$voitures); $i++){
        echo Voiture::$voitures[$i];
        echo "********************* < br>";
    }

    Voiture::afficherNomMarque("Yotota");
    </pre>
    <h3>Résultat : </h3>
    <?php

        
        require("classes/bibliotheque.classe.php");
        require("classes/livre.classe.php");
        
        /* $v1 = new voiture("Yotota", "Ryas", "noir", Voiture::MINI, true, 18500);
        $v1->setEstElectrique(false);
        $v2 = new voiture("Yotota", "Risau", "rouge", Voiture::NORMAL, false, 15500);
        $v2->setNbPortes(3);
        $v3 = new voiture("Troen", "5C", "rouge", Voiture::MINI, true, 16500);
        $v3->setPrix(14500); */

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
        /* $parcMga = new ParcAuto("Parc MGA", "54 rue des Ardennes");
        $parcMga->ajouterVoitures($v1);
        $parcMga->ajouterVoitures($v2);
        $parcMga->ajouterVoitures($v3); */

    ?>
</body>
</html>