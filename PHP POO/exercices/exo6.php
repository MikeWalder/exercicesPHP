<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
    <style>
        .affichageDegats {
            color: cornflowerblue;
            font-size: 1.5em;
            padding: 2vh 0 0 3vw;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>

    <h2>Exercice 5 :</h2>
    <h3>Ecriture du code :</h3>
    <pre>
    
    </pre>
    <h3>Résultat : </h3>
    <?php

        class Livre{
            public $titre;
            public $nbPages;
            private $couleurCouverture;
            private $estTradEnAnglais;

            public function __construct($nom, $nb, $couleur, $traduction){
                $this->titre = $nom;
                $this->nbPages = $nb;
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

            public function afficherLivre(){
                echo "" . $this->titre . ", " . $this->nbPages . " pages, couverture " .$this->couleurCouverture . ", " . $this->affichageTrad($this->estTradEnAnglais) . "<br>"; 
            }

            private function affichageTrad($traduction){
                if($traduction == false){
                    return "non traduit en anglais";
                } else if($traduction == true){
                    return "traduit en anglais";
                }
            }

            public function basculerEnAnglais(){
                $this->traductionAnglaise();
                $this->ajouterPages(5);
            }
        }
        
        $livre1 = new Livre("L'algorithme selon H2Prog", 500, "noire", true);
        $livre1->afficherLivre();
        $livre1->titre = "Algo H2Prog";
        $livre1->afficherLivre();
        $livre1->nbPages = 10;
        $livre1->afficherLivre();
        $livre1->ajouterPages(10);
        $livre1->afficherLivre();
        $livre1->changerCouleur("rose");
        $livre1->afficherLivre();
        $livre1->basculerEnAnglais();
        $livre1->afficherLivre();
    ?>
</body>
</html>