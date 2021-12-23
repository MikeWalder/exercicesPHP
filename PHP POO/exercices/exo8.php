<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8</title>
    <style>
        .boxClass {
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

    <h1>Les méthodes magiques</h1>
    <h2>Exercice 8 : toString</h2>
    <h3>Ecriture du code :</h3>
    <pre>
    class Personnage{
        private $nom;
        private $classe;
        private $attaque;
        private $pv;
        private $forceDuBien;

        function __construct($nom, $classe, $attaque, $pv, $forceDuBien){
            $this->nom = $nom;
            $this->classe = $classe;
            $this->attaque = $attaque;
            $this->pv = $pv;
            $this->forceDuBien = $forceDuBien;
        }

        private function calculDegat(){
            return $this->pv / 100 * $this->attaque + 1;
        }

        public function afficherDegats(){
            echo "Dégâts infligés : " . $this->calculDegat() . "dégâts.< br>";
        }

        public function __toString(){
            $txt = "- Mon nom est : " . $this->nom . "< br>";
            $txt .= "- Ma classe est : " .$this->classe . "< br>";
            $txt .= "- J'inflige " . $this->calculDegat() . "< br>";
            $txt .= "- J'ai " . $this->pv . "< br>";
            $txt .= $this->forceDuBien ? "Je fais partie des forces du bien< br>" : "Je fais partie des forces du mal< br>";
            return $txt;
        }

    }
    
    $perso1 = new Personnage("Milo", "guerrier", 10, 100, true);
    $perso2 = new Personnage("Tya", "archère", 6, 55, true);
    $perso3 = new Personnage("Lili", "écuyère", 8, 50, false);
    $perso4 = new Personnage("Gael", "voleur", 7, 35, false);

    echo $perso1;
    echo $perso2;
    echo $perso3;
    echo $perso4;
    </pre>
    <h3>Résultat : </h3>
    <?php

        class Personnage{
            private $nom;
            private $classe;
            private $attaque;
            private $pv;
            private $forceDuBien;

            function __construct($nom, $classe, $attaque, $pv, $forceDuBien){
                $this->nom = $nom;
                $this->classe = $classe;
                $this->attaque = $attaque;
                $this->pv = $pv;
                $this->forceDuBien = $forceDuBien;
            }

            private function calculDegat(){
                return $this->pv / 100 * $this->attaque + 1;
            }

            public function afficherDegats(){
                echo "Dégâts infligés : " . $this->calculDegat() . "dégâts.<br>";
            }

            public function __toString(){
                $txt = "<div class='boxClass'>- Mon nom est : " . $this->nom . "<br>";
                $txt .= "- Ma classe est : " .$this->classe . "<br>";
                $txt .= "- J'inflige " . $this->calculDegat() . "<br>";
                $txt .= "- J'ai " . $this->pv . "<br>";
                $txt .= $this->forceDuBien ? "- Je fais partie des forces du bien<br>" : "- Je fais partie des forces du mal<br>";
                $txt .= "</div>";
                return $txt;
            }

        }
        
        $perso1 = new Personnage("Milo", "guerrier", 10, 100, true);
        $perso2 = new Personnage("Tya", "archère", 6, 55, true);
        $perso3 = new Personnage("Lili", "écuyère", 8, 50, false);
        $perso4 = new Personnage("Gael", "voleur", 7, 35, false);

        echo $perso1;
        echo $perso2;
        echo $perso3;
        echo $perso4;
    ?>
</body>
</html>