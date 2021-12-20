<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("header.php");
        session_start();
        if(!isset($_SESSION["cibleAleatoire"])){
            $_SESSION["cibleAleatoire"] = rand(0, 1000);
            $cible = $_SESSION["cibleAleatoire"];
        }
        
    ?>

    <h1>Deviner un nombre aléatoire entre 0 et 1000</h1>
    <form action="#" method="POST">
        <input type="hidden" name="nbreRandom" value="true">
        <input type="submit" value="Réinitialiser">
    </form>
    <form action="#" method="POST">
        <fieldset>
            <legend>Entrée du nombre</legend>
            <label for="nbre">Nombre : </label>
            <input type="number" name="nbre" id="nbre" min="0" max="1000">
            <input type="submit" value="Valider">
        </fieldset>
    </form>
    <?php
        if(isset($_POST["nbreRandom"]) && $_POST["nbreRandom"] === "true"){
            $_SESSION["cibleAleatoire"] = rand(0, 1000);
        }

        $cible = $_SESSION["cibleAleatoire"];

        if(isset($_POST["nbre"]) && $_POST["nbre"] > 0){
            $nbreSaisi = (int)$_POST["nbre"];
            if($nbreSaisi === $cible) {
                echo ("<h3>Vous avez gagné ! La valeur cible est bien ".$nbreSaisi." !!</h3>");
            } else {
                if($nbreSaisi < $cible) {
                    echo("<h3>Le chiffre cible est plus élevé !</h3>");
                } else {
                    echo ("<h3>Le chiffre cible est moins grand ! </h3>");
                }
            }
        } else {
            echo("<h3>Saisir une valeur dans le champ ci-dessus</h3>");
        }
    ?>
</body>
</html>