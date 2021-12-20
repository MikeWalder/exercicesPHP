<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <h1>Les tableaux</h1>

    <h2>Etape 1</h2>
    <p>Réaliser un tableau contenant les valeurs : 2, 6, 12, 5, 26, 34, 40, 60</p>

    <?php
        $tab1 = [2, 6, 12, 5, 26, 34, 40, 60];
        print_r($tab1);
    ?>

    <hr>
    <h2>Etape 2</h2>
    <p>Réaliser une fonction qui vérifie si un tableau ne contient que des valeurs paires ou non</p>

    <?php

        $tab2 = [2, 45, 8, 7];
        $tab3 = [2, 8, 18, 58];

        print_r($tab2);
        verifTableauPaire($tab2);

        print_r($tab3);
        verifTableauPaire($tab3);

        function verifTableauPaire($tab){
            $res = 0;
            for($i = 0; $i < count($tab); $i++){
                if($tab[$i] % 2 == 0){
                    $res = $res +1;
                }
            }
            if($res == count($tab)){
                echo ("<br><b>Votre tableau ne contient que des nombres paires !</b><br>");
            }
            else {
                echo ("<br><b>Votre tableau contient des nombres impaires.</b><br>");
            }
        }
    ?>

</body>
</html>