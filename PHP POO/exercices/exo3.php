<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
    <style>
        .container{
            display: flex;
            flex-flow: column wrap;
            justify-content: flex-start;
        }
        .card{
            border: 1px solid black;
            background-color: lightcyan;
            margin: 0 auto;
        }
        .card img {
            height: 180px;
        }
        .blue {
            color: cornflowerblue;
            font-size: 1.5em;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <h2>Fruits :</h2>
    <div class="container">
    <?php
        require_once("classes/fruits.class.php");
        require_once("classes/panier.class.php");

        $pomme1 = new Fruits(Fruits::POMME, 150);
        $banane1 = new Fruits(Fruits::BANANE, 45);
        $cerise2 = new Fruits(Fruits::CERISE, 15.5);
        
        $panier1 = new Panier(); // Création d'un panier

        $panier1->addFruit($pomme1);
        $panier1->addFruit($banane1);

        

        $panier2 = new Panier();
        $panier2->addFruit($cerise2); // alimentation de notre objet
        $panier2->addFruit($pomme1);

        $paniers = [$panier1, $panier2];

        //Affichage du formulaire
        echo "<form action='#' method='POST'>";
            echo "<label for='panier'> Panier : </label>";
            echo '<select name="panier" id="panier" onChange="submit()">';
            echo "<option value=''></option>";
            foreach($paniers as $panier){
                echo "<option value='" . $panier->getIdentifiant() . "'>Panier " . $panier->getIdentifiant() . "</option>";
            }
            echo "</select>";
        echo "</form>";

        if(isset($_POST['panier'])){
            $panierPourAfficher = getPanierById($_POST['panier']);
            echo "<h2<Affichage du panier numéro " . $_POST['panier'] . "</h2>";
            echo $panierPourAfficher;
        }
        
        function getPanierById($id){
            global $paniers;
            foreach($paniers as $panier){
                if($panier->getIdentifiant() === (int)$id){
                    return $panier;
                }
            }
        }
    ?>
    </div>
</body>
</html>