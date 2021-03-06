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
        $pomme2 = new Fruits(Fruits::POMME, 220);
        $cerise1 = new Fruits(Fruits::CERISE, 80);
        $cerise2 = new Fruits(Fruits::CERISE, 95);
        $banane1 = new Fruits(Fruits::BANANE, 45);
        $banane2 = new Fruits(Fruits::BANANE, 12.5);
        $fruits = [$pomme1, $cerise2, $banane1, $cerise1, $pomme2, $banane2];
        
        foreach($fruits as $fruit){
            echo $fruit;
        }

    ?>
    </div>
</body>
</html>