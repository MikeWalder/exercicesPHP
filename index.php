<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
    <style>
        .response {
            color: green;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php
        include("header.php");
    ?>

    <h1 id="mainTitle">PHP et les formulaires</h1>
    <hr>

    <h2 id="secondTitle">Formulaire PHP simple</h2>
    <form action="#" method="POST">
        <fieldset>
            <legend>Informations</legend>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom" required>
            <label for="prenom">Prénom : </label>
            <input type="text" name="prenom" id="prenom" required>
            <label for="age">Âge : </label>
            <input type="number" name="age" id="age" required>
            <input type="submit" value="Envoyer">
        </fieldset>
        
        
    </form>

    <?php
        if(isset($_POST["nom"]) && $_POST["prenom"]){
            $nom = htmlspecialchars($_POST["nom"]);
            $prenom = htmlspecialchars($_POST["prenom"]);
            $age = htmlspecialchars($_POST["age"]);
            echo ("<div class=\"response\">");
            echo("Vous vous appelez ".$prenom." ".$nom.".<br>");
            echo("Vous avez ".$age." ans.<br>");
        }

    ?>


    <script src="index_script.js"></script>
</body>
</html>