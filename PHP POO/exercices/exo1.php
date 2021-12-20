<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
    <style>
        .container{
            display: flex;
            justify-content: space-around;
        }
        .card{
            border: 1px solid black;
        }
        .card img {
            height: 180px;
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

        $pomme1 = new Fruits(Fruits::POMME, 150);
        echo $pomme1;
        $pomme2 = new Fruits(Fruits::POMME, 220);
        echo $pomme2;
        $cerise1 = new Fruits(Fruits::CERISE, 80);
        echo $cerise1;
        $cerise2 = new Fruits(Fruits::CERISE, 95);
        echo $cerise2;

    ?>
    </div>
</body>
</html>