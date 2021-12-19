<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
    <style>
        .resultMoyenne {
            font-size: 20px;
            font-weight: bold;
            color: green;
            margin-left: 30px;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>

    <h1>Calcul d'une moyenne en fonction de notes</h1>

    <form action="#" method="GET">
        <label for="nbreNotes">Nombre de notes :</label>
        <input type="number" name="nbreNotes" id="nbreNotes" min="1">&nbsp;
        <input type="submit" value="Ajouter">
    </form>

    <?php

        if(isset($_GET["nbreNotes"]) && $_GET["nbreNotes"] > 0) {
            $nbreNotes = (int)$_GET["nbreNotes"];
            //echo $nbreNotes;
            $formResult = "<form action='#' method='POST'>";
            $formResult .= "<fieldset>";
            $formResult .= "<legend>Inscrire les notes pour calculer la moyenne</legend>";
            for($i = 1; $i <= $nbreNotes; $i++) {
                $formResult .= "<label for=\"note".$i."\">Note ".$i." : </label>";
                $formResult .= "<input type=\"number\" name=\"note".$i."\" min=\"0\" max=\"20\" step=\"0.1\" id=\"note".$i."\"><br>";
            }
            $formResult .= "<br><input type='hidden' name='calculMoyenne'>";
            $formResult .= "<br><input type='submit' value='Calculer'>";
            $formResult .= "</fieldset>";
            $formResult .= "</form>";
            echo $formResult;

            if(isset($_POST["note1"])) {
                $res = 0;
                
                for($j = 1; $j <= $nbreNotes; $j++) {
                    $res += $_POST["note".$j.""];
                }
                $res = $res / $nbreNotes;
                echo "<div class='resultMoyenne'>Votre moyenne est de ".$res."</div><br>";
            }
        }

        
    ?>
</body>
</html>