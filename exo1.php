<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
    <style>
        .tableContained {
            border: 3px inset black;
            padding: 10px 0px 10px 6vw;
            margin: 0 auto;
            width: 10%;
            font-size: 22px;
            background-color: #283645;
            color: white;
            transition: all 0.4s;
        }
        .tableContained:hover {
            color: yellowgreen;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>

    <h1>Affichage des tables de multiplication</h1>

    <form action="#" method="POST">
        <fieldset>
            <legend>Recherche de la table</legend>
            <label for="nbre">Nombre : </label>
            <input type="number" name="nbre" id="nbre">
            <input type="submit" value="Entrer">
        </fieldset>
    </form>

    <?php
        if(isset($_POST["nbre"])) {
            $nbre = (int)$_POST["nbre"];
            echo ("<div class='tableContained'>");
            for($i=1; $i<= 10; $i++) {
                echo ($i." x ".$nbre." = ".($i * $nbre)."<br>");
            }
            echo ("</div>");
        }
    ?>
</body>
</html>