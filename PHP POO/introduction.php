<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
    <style>
        .container {
            margin: 0 auto;
            padding-left: 20px;
            width: 32%;
            text-align: center;
            font-size: 28px;
        }
        .green {
            color: green;
            font-weight: bold;
        }
        .presentationCode {
            font-size: 1.5em;

        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <h1>Introduction à la Programmation Orientée Objet (POO)</h1>

    <?php
        class Personnage{
            public $nom = "Luke";
            public $age = 25;
            public $img = "images/luke.png";
            public $recherche = false;
            public $prime;

            public function afficherInfosClasse() {
                echo "<div class='container'>";
                    echo "Nom : " . $this->nom . "<br>";
                    echo "Âge : " . $this->age . "<br>";
                    
                /* if($this->recherche === true){
                    echo "Recherché : Oui<br>";
                } else if ($this->recherche === false){
                    echo "Recherché : Non<br>";
                } */

                $this->avisRecherche($this->recherche, $this->prime);
                    echo "<img src='" . $this->img . "'>";
                echo "</div>";
            }
            public function avisRecherche($recherche, $prime){
                if($recherche === true){
                    echo "Recherché : Oui - prime de ".$prime."$<br>";
                } else if ($recherche === false){
                    echo "Recherché : Non<br>";
                }
            }
        }

        $p1 = new Personnage(); // Nouvelle instance de la classe personnage
        echo "<div class='container'>";
            echo "Nom : ".$p1->nom."<br>";
            echo "Âge : ".$p1->age." ans<br>";
            echo "<img src='".$p1->img."' alt='".$p1->nom."'>";
        echo "</div>";
    ?>
    <hr>
    <h3>Exemple de classe : </h3>
    <?php
        print_r($p1);
    ?>
    <br>
    <p>Une classe contient des <strong>propriétés</strong> ( = variables internes contenant des valeurs) et 
    des <strong>méthodes</strong> ( = fonctions internes à la classe).</p>
    <p>Le fait de créer un objet à partir d'une classe s'appelle <strong>instancier une classe.</strong></p>
    <h3>Appeler une méthode :</h3>
    <p>$p2 = new Personnage(); // <span class="green">Instanciation de la classe</span></p>
    <p>$p2->afficherInfosClasse();</p>
    <?php
        $p2 = new Personnage();
        $p2->nom = "Dalton";
        $p2->age = 31;
        $p2->img = "images/dalton.png";
        $p2->recherche = true;
        $p2->prime = 1500000;
        $p2->afficherInfosClasse();
    ?>
    <br>
    <h3>Appel d'une méthode dans une méthode</h3>
    <pre class="presentationCode">
        class Personnage {
            public $nom;
            public $prenom;
            public $age;
            public $recherche = false;
            public $prime;

            public function afficherInfosClasse() {
                echo "< div class='container'>";
                    echo "Nom : " . $this->nom . "< br>";
                    echo "Âge : " . $this->age . "< br>";

                    $this->avisRecherche($this->recherche, $this->prime); <span class="green">// Appel dans la méthode d'une méthode</span>
                    echo "< img src='" . $this->img . "'>";
                echo "< /div>";
            }
            public function avisRecherche($recherche, $prime){
                if($recherche === true){
                    echo "Recherché : Oui - prime de ".$prime."$< br>";
                } else if ($recherche === false){
                    echo "Recherché : Non< br>";
                }
            }
        }
    </pre>
</body>
</html>