<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
    <style>
        .affichageVoiture {
            color: cornflowerblue;
            font-size: 1.5em;
            padding: 2vh 0 0 3vw;
        }
        .resultatRecherche {
            color: goldenrod;
            background-color: black;
            font-size: 1.8em;
            font-weight: bold;
            margin-left: 3vw;
            margin-top: 2em;
            padding: 0.2em;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>

    <h2>Exercice 7 :</h2>
    <h3>Ecriture du code :</h3>
    <pre>
    class Voiture{
        private $marque;
        private $modele;
        private $couleur;
        private $nbPortes;
        private $electrique;

        public function __construct($marque, $modele, $couleur, $nbPortes, $electrique){
            $this->marque = $marque;
            $this->modele = $modele;
            $this->couleur = $couleur;
            $this->nbPortes = $nbPortes;
            $this->electrique = $electrique;
        }

        public function afficherVoiture(){
            echo "< div class='affichageVoiture'>";
                echo "< b>Marque : < /b>" . $this->marque . "< br>";
                echo "< b>Modèle : < /b>" . $this->modele . "< br>";
                echo "< b>Couleur : < /b>" . $this->couleur . "< br>";
                echo "< b>Nombre de portes : < /b>" . $this->nbPortes . "< br>";
                if($this->electrique){
                    echo "< b>Voiture électrique : < /b>OUI < br>";
                } else {
                    echo "Voiture électrique : NON < br>";
                }
                
            echo "< /div>< br>< br>";
        }

        public function getMarque(){
            return $this->marque;
        }

        public function getModele(){
            return $this->modele;
        }

        public function getCouleur(){
            return $this->couleur;
        }

        public function getNbPortes(){
            return $this->nbPortes;
        }

        public function getElectrique(){
            return $this->electrique;
        }

        public function setMarque($marque){
            $this->marque = $marque;
        }

        public function setModele($modele){
            $this->modele = $modele;
        }

        public function setCouleur($couleur){
            $this->couleur = $couleur;
        }

        public function setNbPortes($nbPortes){
            $this->nbPortes = $nbPortes;
        }

        public function setElectrique($electrique){
            $this->electrique = $electrique;
        }
    }
    
    $v1 = new Voiture("Yotota", "Ryas", "noir", 5, true);
    $v2 = new Voiture("Yotota", "Risau", "rouge", 3, false);
    $v3 = new Voiture("Troen", "5C", "vert foncé", 5, true);

    $tab = [$v1, $v2, $v3];

    for($i = 0; $i < count($tab); $i++){
        $tab[$i]->afficherVoiture();
    }
    afficherVoitureMarque($tab, "Yotota");


    function afficherVoitureMarque($tableau, $marqueRecherche){
        echo "< span class='resultatRecherche'>Voici les résultats de la marque " . $marqueRecherche . ":< /span>< br>";
        for ($i = 0; $i < count($tableau); $i++){
            if($tableau[$i]->getMarque() === $marqueRecherche){
                $tableau[$i]->afficherVoiture();
            }
        }
    }
    </pre>
    <h3>Résultat : </h3>
    <?php
        class Voiture{
            private $marque;
            private $modele;
            private $couleur;
            private $nbPortes;
            private $electrique;

            public function __construct($marque, $modele, $couleur, $nbPortes, $electrique){
                $this->marque = $marque;
                $this->modele = $modele;
                $this->couleur = $couleur;
                $this->nbPortes = $nbPortes;
                $this->electrique = $electrique;
            }

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

            public function getMarque(){
                return $this->marque;
            }

            public function getModele(){
                return $this->modele;
            }

            public function getCouleur(){
                return $this->couleur;
            }

            public function getNbPortes(){
                return $this->nbPortes;
            }

            public function getElectrique(){
                return $this->electrique;
            }

            public function setMarque($marque){
                $this->marque = $marque;
            }

            public function setModele($modele){
                $this->modele = $modele;
            }

            public function setCouleur($couleur){
                $this->couleur = $couleur;
            }

            public function setNbPortes($nbPortes){
                $this->nbPortes = $nbPortes;
            }

            public function setElectrique($electrique){
                $this->electrique = $electrique;
            }
        }
        
        $v1 = new Voiture("Yotota", "Ryas", "noir", 5, true);
        $v2 = new Voiture("Yotota", "Risau", "rouge", 3, false);
        $v3 = new Voiture("Troen", "5C", "vert foncé", 5, true);

        $tab = [$v1, $v2, $v3];

        for($i = 0; $i < count($tab); $i++){
            $tab[$i]->afficherVoiture();
        }
        afficherVoitureMarque($tab, "Yotota");


        function afficherVoitureMarque($tableau, $marqueRecherche){
            echo "<span class='resultatRecherche'>Voici les résultats de la marque " . $marqueRecherche . ":</span><br>";
            for ($i = 0; $i < count($tableau); $i++){
                if($tableau[$i]->getMarque() === $marqueRecherche){
                    $tableau[$i]->afficherVoiture();
                }
            }
        }
    ?>
</body>
</html>