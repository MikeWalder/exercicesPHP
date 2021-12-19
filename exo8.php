<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8</title>
</head>
<body>
    <?php
        include("header.php");
        $tab1 = [
            "Nom" => "Serges",
            "Age" => 45,
            "Sexe" => "Homme",
            "Force" => 6,
            "Agilité" => 5
        ];
        $tab2 = [
            "Nom" => "Lucas",
            "Age" => 18,
            "Sexe" => "Homme",
            "Force" => 3.5,
            "Agilité" => 6
        ];
        $tab3 = [
            "Nom" => "Mike",
            "Age" => 33,
            "Sexe" => "Homme",
            "Force" => 4,
            "Agilité" => 5.5
        ];
        $tab4 = [
            "Nom" => "Didier",
            "Age" => 27,
            "Sexe" => "Homme",
            "Force" => 4.5,
            "Agilité" => 3.5
        ];
    ?>
    <h1>Tableaux associatifs</h1>

    <?php
        afficheTabAssociatif($tab4);
        function afficheTabAssociatif($tab){
            foreach($tab as $index => $value){
                echo "<b>".$index."</b> : ".$value."<br>";
            }
        }
    ?>
</body>
</html>