<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2</title>
</head>
<body>
    <?php
        include("header.php");
    ?>

    <h1>Construction d'une pyramide</h1>

    <form action="#" method="POST">
        <fieldset>
            <legend>Hauteur de la pyramide</legend>
            <label for="pyramide">Hauteur : </label>
            <input type="number" name="pyramide" id="pyramide">
            <input type="submit" vlaue="Lancer">
        </fieldset>
    </form>

    <?php
        if(isset($_POST["pyramide"]) && $_POST["pyramide"] > 0){
            $pyramide = $_POST["pyramide"];
            $lad = "x ";
            for($i = 2; $i <= $pyramide; $i++){
                $lad .= "x ";
                echo $lad."<br>";
            }
            for($j=0; $j < $pyramide-2; $j++) {
                $lad = substr($lad, 0, strlen($lad)-2);
                echo $lad."<br>";
            }
        }
    ?>
</body>
</html>