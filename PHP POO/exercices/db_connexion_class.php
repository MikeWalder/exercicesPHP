<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO avec classe</title>
    <style>
        /* .container{
            display: flex;
            
            justify-content: space-around;
        } */
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

        require("classes/PDO.class.php");
    ?>
    <h2>Fruits :</h2>
    <div class="container">
        <div class="row">
            <?php
                $pdo = myPDO::getPDO();
                $statement = $pdo->prepare("SELECT f.nom as nom, f.poids as poids, f.prix as prix FROM fruit f INNER JOIN panier p ON f.identifiant = p.identifiant");
                $statement->execute();
                $fruits = $statement->fetchAll();
                foreach($fruits as $fruit){
                    echo "<div class='col-md-3 shadow'>";
                        echo "Nom : " . $fruit['nom'] . "<br>";
                        echo "Poids : " . $fruit['poids'] . "<br>";
                        echo "Prix : " . $fruit['prix'] . "€<br>";
                        echo "----------<br>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>