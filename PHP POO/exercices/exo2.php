<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2</title>
    <style>
        .container{
            display: flex;
            flex-flow: column wrap;
            justify-content: flex-start;
        }
        .card{
            border: 1px solid black;
            background-color: lightcyan;
            margin: 0 auto;
        }
        .card img {
            height: 180px;
        }
        .blue {
            color: cornflowerblue;
            font-size: 1.5em;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <h2>Fruits :</h2>
    <div class="container">
    <?php
        require_once("classes/fruits.class.php");
        require_once("classes/panier.class.php");

        $pomme1 = new Fruits(Fruits::POMME, 150);
        $banane1 = new Fruits(Fruits::BANANE, 45);
        $cerise2 = new Fruits(Fruits::CERISE, 15.5);
        
        $panier1 = new Panier(); // Création d'un panier

        $panier1->addFruit($pomme1);
        $panier1->addFruit($banane1);

        echo $panier1;

        $panier2 = new Panier();
        $panier2->addFruit($cerise2); // alimentation de notre objet
        $panier2->addFruit($pomme1);

        echo $panier2;
    ?>
    </div>
</body>
</html>