<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2</title>
    <style>
        .presentationCode {
            font-size: 1.5em;
        }
        .green {
            color: green;
            font-weight: bold;
        }
        .blue {
            color: blue;
            font-weight: bold;
        }
        .container {
            font-size: 1.5em;
            padding-left: 40px;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <h1>Les constructeurs</h1>
    <p>Il s'agit d'une fonction qui permet d'envoyer des informations à notre objet.</p>
    <h2>Ecriture : </h2>
        <pre class="presentationCode">
            class Personnage{
                public $nom;
                public $prenom;
                public $age;
                public $recherche;
                public $prime;

            function __construct($nom, $prenom, $age, $recherche, $prime){
                <span class="green">// Les paramètres doivent être dans le même ordre que les paramètres de la classe.</span>
                <span class="blue">$this->nom</span> = nom;
                <span class="blue">$this->prenom</span> = prenom;
                <span class="blue">$this->age</span> = age;
                <span class="blue">$this->recherche</span> = recherche;
                <span class="blue">$this->prime</span> = prime;
            }
        </pre>
    <?php

        require_once("classes/classes_constructeurs.php");
        
        $p3 = new Personnage("Voulzy", "Laurent", 72, false, 0, "images/voulzy.png");
        $p3->afficheDatas();

        $p4 = new Personnage("Jackson", "Michael", 63, true, 30000000, "images/jackson.png");
        $p4->afficheDatas();
    ?>

</body>
</html>