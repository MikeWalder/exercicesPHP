<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
    <style>
        .container {
            background-color: lightgrey;
            width: 350px;
            height: 200px;
            margin-top: 30px;
            box-sizing: border-box;
        }
        .formatImg {
            width: 200px;
            height: 200px;
            box-sizing: border-box;
            float: left;
            
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
        $t1 = ["Jean", 28, "Lille", 4, 3, 5];
        $t2 = ["Eric", 45, "Marseille", 5, 3, 4];
        $t3 = ["Laura", 22, "Brest", 3, 5, 4];
        $t4 = ["Clara", 32, "Toulouse", 5, 2, 4];
    ?>

    <h1>Sélection du personnage</h1>

    <form action="#" method="POST">
        <label for="perso">Personnage : </label>
        <select name="perso" id="perso" onchange="submit()">
            <option value="t1" <?php if(isset($_POST['perso']) && $_POST['perso'] === "t1") echo "selected" ?>>Jean</option>
            <option value="t2" <?php if(isset($_POST['perso']) && $_POST['perso'] === "t2") echo "selected" ?>>Eric</option>
            <option value="t3" <?php if(isset($_POST['perso']) && $_POST['perso'] === "t3") echo "selected" ?>>Laura</option>
            <option value="t4" <?php if(isset($_POST['perso']) && $_POST['perso'] === "t4") echo "selected" ?>>Clara</option>
        </select>&ensp;
        <input type="submit" value="Valider">
    </form>
    <h3>Personnage :</h3>

    <?php
        
        if(isset($_POST["perso"])){
            if($_POST["perso"] === "t1"){
                echo "<div class='container'>";
                echo "<img class='formatImg' src=\"images/jean.png\">";
                affichagePersonnage($t1);
                echo "</div>";
            }
            if($_POST["perso"] === "t2"){
                echo "<div class='container'>";
                echo "<img class='formatImg' src=\"images/eric.png\">";
                affichagePersonnage($t2);
                echo "</div>";
            }
            if($_POST["perso"] === "t3"){
                echo "<div class='container'>";
                echo "<img class='formatImg' src=\"images/laura.png\">";
                affichagePersonnage($t3);
                echo "</div>";
            }
            if($_POST["perso"] === "t4"){
                echo "<div class='container'>";
                echo "<img class='formatImg' src=\"images/clara.png\">";
                affichagePersonnage($t4);
                echo "</div>";
            }
        }

        function affichagePersonnage($perso){
            echo ("Nom : ".$perso[0]."<br>");
            echo ("Âge : ".$perso[1]."<br>");
            echo ("Ville : ".$perso[2]."<br>");
            echo ("Agilité : ".$perso[3]."<br>");
            echo ("Rapidité : ".$perso[4]."<br>");
            echo ("Endurance : ".$perso[5]."<br>");
        }
    ?>
</body>
</html>