<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
</head>
<body>
    <?php
        include("header.php");
    ?>

    <h1>Cercle - Périmètre et aire</h1>

    <form action="#" method="POST">
        <fieldset>
            <legend>Paramètres de calcul</legend>
            <label for="rayon">Rayon du cercle : </label>
            <input type="number" name="rayon" id="rayon" min="1" step="0.5">
            <br>
            <label for="perimetre">Périmètre</label>
            <input type="checkbox" name="perimetre" id="perimetre" value="perimetre" checked>
            <br>
            <label for="aire">Aire</label>
            <input type="checkbox" name="aire" id="aire" value="aire">
            <br>
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>

    <?php
        if(!empty($_POST["perimetre"]) || !empty($_POST["aire"])){
            echo("<h3>Résultats</h3>");
        }
        if(!empty($_POST["perimetre"]) && isset($_POST["rayon"])){
            calculCercle($_POST["rayon"], $_POST["perimetre"]);
        }
        if(!empty($_POST["aire"]) && isset($_POST["rayon"])){
            calculCercle($_POST["rayon"], $_POST["aire"]);
        }
        function calculCercle($nbrePostForm, $typeCalcul){
            if($typeCalcul === "perimetre"){
                $result = ceil($nbrePostForm * 2 * pi());
                echo ("<b>".$typeCalcul."</b> : ".$result." cm<br>");
            }
            if($typeCalcul === "aire"){
                $result = ceil($nbrePostForm * $nbrePostForm * pi());
                echo ("<b>".$typeCalcul."</b> : ".$result." cm²<br>");
            }
            else if(empty($typeCalcul)){
                echo ("<b>Erreur 404 !</b>");
            }
        }
    ?>
</body>
</html>