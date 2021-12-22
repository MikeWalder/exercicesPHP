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
    class Personnage{
        private $nom;
        private $classe;
        private $attaque;
        private $pv;
        private $forceBien;

        public function __construct($nom, $classe, $attaque, $pv, $forceBien){
        $this->nom = $nom;
        $this->classe = $classe;
        $this->attaque = $attaque;
        $this->pv = $pv;
        $this->forceBien = $forceBien;
        }

        private function calculDegat(){
            return $this->pv / 100 * $this->attaque + 1;
        }

        public function afficherDegats(){
            echo "<div class='affichageDegats'>Dégâts infligés : " . $this->calculDegat() . " dégâts</div><br>";
        }
    }

    $perso1 = new Personnage("Milo", "guerrier", 10, 100, true);
    $perso2 = new Personnage("Tya", "archère", 5, 50, true);
    $perso3 = new Personnage("Lili", "archère", 5, 55, false);
    $perso4 = new Personnage("Gael", "voleur", 2, 10, false);
    
    $perso1->afficherDegats();
    $perso2->afficherDegats();
    $perso3->afficherDegats();
    $perso4->afficherDegats();
    </pre>
    <h3>Résultat : </h3>
    <?php
        class Personnage{
            private $nom;
            private $classe;
            private $attaque;
            private $pv;
            private $forceBien;

            public function __construct($nom, $classe, $attaque, $pv, $forceBien){
                $this->nom = $nom;
                $this->classe = $classe;
                $this->attaque = $attaque;
                $this->pv = $pv;
                $this->forceBien = $forceBien;
            }

            private function calculDegat(){
                return $this->pv / 100 * $this->attaque + 1;
            }

            private function afficherForce(){
                if($this->forceBien === true){
                    return "bien";
                } else if($this->forceBien == false){
                    return "mal";
                }
            }

            public function afficherDegats(){
                echo "<div class='affichageDegats'>Dégâts infligés par 'Force du " . $this->afficherForce() . "' : " . $this->calculDegat() . " dégâts</div><br>";
            }
        }

        $perso1 = new Personnage("Milo", "guerrier", 10, 100, true);
        $perso2 = new Personnage("Tya", "archère", 5, 50, true);
        $perso3 = new Personnage("Lili", "archère", 5, 55, false);
        $perso4 = new Personnage("Gael", "voleur", 2, 10, false);
        
        $perso1->afficherDegats();
        $perso2->afficherDegats();
        $perso3->afficherDegats();
        $perso4->afficherDegats();
    ?>
</body>
</html>