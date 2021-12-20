<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters et setters</title>
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
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <h1>Les getters et les setters</h1>
    <p>Voici la classe ci-dessous : </p>

    <pre class="presentationCode">
        class Personnage{
            <span class="cornBlue">public</span> $nom;
            <span class="cornBlue">public</span> $prenom;
            <span class="cornBlue">public</span> $age;
            <span class="cornBlue">public</span> $recherche;
            <span class="cornBlue">public</span> $prime;
            <span class="cornBlue">public</span> $img;
        }
    </pre>

    <p>Sur cette classe on peut modifier ses attributs à n'importe quel endroit du code, ce qui est déconseillé
        car comportant des risques.<br>
        Pour éviter cela, on spécifie ànos attributs de classe qu'ils sont en <strong>private</strong> à savoir 
        uniquement accessibles depuis des fonctions appelées <strong>getters</strong> et <strong>setters</strong>.
    </p>
    <p>Un <em>getter</em> est une fonction permettant de récupérer l'information pour chaque attribut.<br>
        Un <em>setter</em> est une fonction qui permet de modifier l'information pour chaque attribut.
    </p>

    <pre class="presentationCode">
        class Personnage{
            <span class="orange">private</span> $nom;
            <span class="orange">private</span> $prenom;
            <span class="orange">private</span> $age;
            <span class="orange">private</span> $recherche;
            <span class="orange">private</span> $prime;
            <span class="orange">private</span> $img;
        }
    </pre>

    <h2>Ecriture des getters :</h2>

    <pre class="presentationCode">
        function <span class="green">getNom()</span>{ return <span class="cornBlue">$this->nom;</span> }
        function <span class="green">getPrenom()</span>{ return <span class="cornBlue">$this->prenom;</span> }
        function <span class="green">getAge()</span>{ return <span class="cornBlue">$this->age;</span> }
        function <span class="green">getRecherche()</span>{ return <span class="cornBlue">$this->recherche;</span> }
        function <span class="green">getPrime()</span>{ return <span class="cornBlue">$this->prime;</span> }
        function <span class="green">getImg()</span>{ return <span class="cornBlue">$this->img;</span> }
    </pre>

    <h2>Ecriture des setters :</h2>

    <pre class="presentationCode">
        function <span class="green">setNom($nom)</span>{ <span class="cornBlue">$this->nom</span> = $nom; }
        function <span class="green">setPrenom($prenom)</span>{ <span class="cornBlue">$this->prenom</span> = $prenom; }
        function <span class="green">setAge($age)</span>{ <span class="cornBlue">$this->age</span> = $age; }
        function <span class="green">setRecherche($recherche)</span>{ <span class="cornBlue">$this->recherche</span> = $recherche; }
        function <span class="green">setPrime($prime)</span>{ <span class="cornBlue">$this->prime</span> = $prime; }
        function <span class="green">setImg($img)</span>{ <span class="cornBlue">$this->img</span> = $img; }
    </pre>

    <?php
        class Personnage{
            private $nom;
            private $prenom;
            private $age;
            private $recherche;
            private $prime;
            private $img;
        
            // Getters
            function getNom(){ return $this->nom; }
            function getPrenom(){ return $this->prenom; }
            function getAge(){ return $this->age; }
            function getRecherche(){ return $this->recherche; }
            function getPrime(){ return $this->prime; }
            function getImg(){ return $this->img; }

            // Setters
            function setNom($nom){ $this->nom = $nom; }
            function setPrenom($prenom){ $this->prenom = $prenom; }
            function setAge($age){ $this->age = $age; }
            function setRecherche($recherche){ $this->recherche = $recherche; }
            function setPrime($prime){ $this->prime = $prime; }
            //function setImg($img){ $this->img = $img; }

            public function afficherInfos(){
                echo "<div class='contained'>";
                    echo "<b>Nom : </b>" . $this->nom . "<br>";
                    echo "<b>Prénom : </b>" . $this->prenom . "<br>";
                    echo "<b>Âge : </b>" . $this->age . " ans<br>";
                    echo "<b>Prime : </b>" . $this->prime . "€<br>";
                    $this->affichageImage($this->img);
                echo "</div>";
            }

            public function affichageImage($img){
                if($img !== ""){
                    echo "<img src='" . $img . "' alt='" . $img . "'>";
                }
            }
        }

        $perso1 = new Personnage("Laurent", "Alexandre", 57, true, 7000000, "");
        $perso1->setNom("Laurent");
        $perso1->setPrenom("Alexandre");
        $perso1->setAge(57);
        $perso1->setPrime(1500000000);
        $perso1->afficherInfos();
    ?>
    
</body>
</html>