<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 9</title>
    <style>
        .container img {
            float: left;
        }
        .container {
            width: 20%;
            margin: 0 auto;
            border-bottom: 2px solid black;
        }
        .containedImage {
            float: left;
        }
        .datas {
            padding-top: 15px;
            font-size: 22px;
        }
        .clearBoth {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");

        $tab1 = [
            "Nom" => "Serges",
            "Age" => 45,
            "Sexe" => "Homme",
            "Force" => 6,
            "Agilité" => 5,
            "Img" => "clara.png"
        ];
        $tab2 = [
            "Nom" => "Lucas",
            "Age" => 18,
            "Sexe" => "Homme",
            "Force" => 3.5,
            "Agilité" => 6,
            "Img" => "eric.png"
        ];
        $tab3 = [
            "Nom" => "Mike",
            "Age" => 33,
            "Sexe" => "Homme",
            "Force" => 4,
            "Agilité" => 5.5,
            "Img" => "laura.png"
        ];
        $tab4 = [
            "Nom" => "Didier",
            "Age" => 27,
            "Sexe" => "Homme",
            "Force" => 4.5,
            "Agilité" => 3.5,
            "Img" => "jean.png"
        ];
        $tableau = [$tab1, $tab2, $tab3, $tab4];
    ?>
    <h1>Tableau de tableaux associatifs</h1>
    <?php
        foreach($tableau as $tab) {
            echo "<div class='container'>";
                echo "<div class='containedImage'>";
                    echo "<img src='images/".$tab['Img']."' alt=".$tab['Img'].">";
                echo "</div>";
                echo "<div class='datas'>";
                    afficherInfosPerso($tab);
                echo "</div>";
                echo "<div class='clearBoth'></div>";
            echo "</div>";
        }

        function afficherInfosPerso($tab){
            foreach($tab as $index => $value){
                if($index !== "Img"){
                    echo "<b>".$index."</b> : ".$value."<br>";
                }
            }
        }
        
    ?>
</body>
</html>