<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes de classe</title>
    <style>
        .presentationCode {
            font-size: 1.5em;
        }
        .cornBlue {
            color: cornflowerblue;
            font-weight: bold;
        }
        .orange {
            color: orange;
            font-weight: bold;
        }
        .green {
            color: limegreen;
            font-weight: bold;
        }
        .contained {
            padding-left: 120px;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <h1>Les constantes de classe</h1>
    <p>Il s'agit de définir une valeur statique dans notre classe qui peut être accessible de partout.</p>
    <p>Les constantes sont allouées une fois par classe, et non pour chaque instance de classe, ce qui 
        veut dire qu'une constante appartient intrinsèquemeent à la classe et non pas à un objet en 
        particulier et que tous les objets d'une classe vont ainsi partager cette même constante de classe. 
    </p>

    <h2>Ecriture :</h2>
    <pre class="presentationCode">
        <span class="cornBlue">const</span> MALE = true;
        <span class="cornBlue">const</span> FEMELLE = false;
    </pre>

    <h2>Utilisation des constantes dans le code :</h2>
    <pre class="presentationCode">
        class Animal{
            private $nom;
            private $type;
            private $age;
            private $ville;
            private $sexe;

            <span class="cornBlue">const</span> MALE = true;
            <span class="cornBlue">const</span> FEMELLE = false;

            function <span class="green">getNom()</span>{ return $this->nom; }
            function <span class="green">getType()</span>{ return $this->type; }
            function <span class="green">getAge()</span>{ return $this->age; }
            function <span class="green">getVille()</span>{ return $this->ville; }
            function <span class="green">getSexe()</span>{ return $this->sexe; }

            function <span class="green">setNom($nom)</span>{ $this->nom = $nom; }
            function <span class="green">setType($type)</span>{ $this->type = $type; }
            function <span class="green">setAge($age)</span>{ $this->age = $age; }
            function <span class="green">setVille($ville)</span>{ $this->ville = $ville; }
            function <span class="green">setSexe($sexe)</span>{ $this->sexe = $sexe; }

            public function affichageInfos(){
                echo "< div class='contained'>";
                    echo "< b>Nom : < /b>" . $this->nom . "< br>";
                    echo "< b>Type : < /b>" . $this->type . "< br>";
                    echo "< b>Âge : < /b>" . $this->age . " ans< br>";
                    echo "< b>Ville : < /b>" . $this->ville . "€< br>";
                    echo "< b>Sexe : < /b>" . $this->sexe . "€< br>";
                echo "< /div>";
            }
        }
    </pre>

    <br><br>
    <h2>Accéder à une constante depuis l'intérieur d'une classe avec <span class="orange">self</span></h2>
    <pre class="presentationCode">

        <span class="cornBlue">const</span> MALE = true;
        <span class="cornBlue">const</span> FEMELLE = false;

        public function choixSexe($sexe){
            if($sexe === <span class="orange">self::MALE</span>){
                echo "< b>Sexe : < /b>Mâle< br>";
            }
            else if($sexe === <span class="orange">self::FEMELLE</span>){
                echo "< b>Sexe : < /b>Femelle< br>";
            }
        }
    </pre>

    <h2>Résultat :</h2>
    <pre class="presentationCode">
        $animal1 = new Animal("Félix", "chat", 6, "Strasbourg", <span class="orange">Animal::MALE</span>); 
        $animal1->affichageInfos();
    </pre>
    <p>On constate que l'opérateur de résolution de portée ( :: ) est précédé par le nom de la classe dans 
        laquelle ils sont définis.</p>
    <?php
        class Animal{
            private $nom;
            private $type;
            private $age;
            private $ville;
            private $sexe;

            const MALE = true;
            const FEMELLE = false;

            function __construct($nom, $type, $age, $ville, $sexe){
                $this->nom = $nom;
                $this->type = $type;
                $this->age = $age;
                $this->ville = $ville;
                $this->sexe = $sexe;
            }

            function getNom(){ return $this->nom; }
            function getType(){ return $this->type; }
            function getAge(){ return $this->age; }
            function getVille(){ return $this->ville; }
            function getSexe(){ return $this->sexe; }

            function setNom($nom){ $this->nom = $nom; }
            function setType($type){ $this->type = $type; }
            function setAge($age){ $this->age = $age; }
            function setVille($ville){ $this->ville = $ville; }
            function setSexe($sexe){ $this->sexe = $sexe; }

            public function affichageInfos(){
                echo "<div class='contained'>";
                    echo "<b>Nom : </b>" . $this->nom . "<br>";
                    echo "<b>Type : </b>" . $this->type . "<br>";
                    echo "<b>Âge : </b>" . $this->age . " ans<br>";
                    echo "<b>Ville : </b>" . $this->ville . "<br>";
                    $this->choixSexe($this->sexe);
                echo "</div>";
            }

            public function choixSexe($sexe){
                if($sexe === self::MALE){
                    echo "<b>Sexe : </b>Mâle<br>";
                }
                else if($sexe === self::FEMELLE){
                    echo "<b>Sexe : </b>Femelle<br>";
                }
            }
        }

        $animal1 = new Animal("Félix", "chat", 6, "Strasbourg", Animal::MALE); 
        $animal1->affichageInfos();

    ?>


</body>
</html>