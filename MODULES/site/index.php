<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de forum </title>
    <!-- Bootstrap 4.6.0 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
    crossorigin="anonymous">
    <style>
        .infos {
            border: 2px solid black;
            width: 25%;
            margin: 0.2em auto;
        }
    </style>
</head>
<body>
    
    <?php
        require("header.php");
        require("../classes/identite.class.php");
        session_start();

    ?>
    <br><br><br><br>

    <form action="#" method="POST">
        <div class="form-row">
            <div class="col">
                <label class="form-check-label" for="prenom"></label>
                <input type="text" class="form-control" placeholder="Votre prénom" id="prenom" name="prenom">
            </div>
            <div class="col">
                <label class="form-check-label" for="nom"></label>
                <input type="text" class="form-control" placeholder="Notre nom" id="nom" name="nom">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>


    <?php

        if(isset($_POST["prenom"]) && isset($_POST["nom"])){

            $nom = htmlspecialchars($_POST["nom"]);
            $prenom = htmlspecialchars($_POST["prenom"]);
            print_r(Identite::$identities);
            if($_SESSION["identification"] !== null){
                $id = $_SESSION["identification"];
                //print_r($id);
            }
            else {
                $id = [];
            }
            if ($prenom !== "" && $nom !== ""){
                if(count($id) !== 0 ){
                    array_push($id, new Identite($nom, $prenom));
                    $_SESSION["identification"]= $id;
                    //print_r($id);
                    echo "<br>";
                    for($i = 0; $i < count($_SESSION["identification"]); $i++){
                        $id[$i] = $_SESSION["identification"][$i];
                        echo $id[$i];
                    }
                }
            }
            else {
                echo "Vous n'avez fourni aucune information !<br>";
            }

        }
    ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" 
integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" 
crossorigin="anonymous"></script>
</body>
</html>