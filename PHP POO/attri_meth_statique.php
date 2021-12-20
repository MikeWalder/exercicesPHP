<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attributs et méthodes statiques</title>
    <style>
        .container {
            display: flex;
            justify-content: space-around;
        }
        .cornBlue {
            color: cornflowerblue;
            font-weight: bold;
        }
        .orange {
            color: orange;
            font-weight: bold;
        }
        .green {
            color: limegreen;
            font-weight: bold;
        }
        .section {
            min-width: 30%;
            font-size: 1.5em;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <h1>Les attributs et les méthodes statiques</h1>
    <p>Les méthodes statiques peuvent être appelées <span class="green">sans instancier la classe.</span></p>
    <p>Les attributs et méthodes statiques appartiennent à la classe et non à l'objet. 
        Par conséquent on ne peut pas y accéder par l'opérateur -> mais plutôt par l'opérateur 
        de résolution de portée :: précédé par le nom de la classe dans laquelle ils sont définis. </p>
    <div class="container">
    <pre class="section">
    class Facture{
        <span class="cornBlue">const</span> TVA = 20;
        public function montantTTC($prixHT){
            return $prixHT * (1 + <span class="orange">self::TVA</span>/100);
        }
    }
    $facture1 = new Facture();
    echo $facture1->montantTTC(1500); <span class="green">// affiche 1800</span>
    <div class="green">// on fait appel à la méthode montantTTC en instanciant facture1</div>
    </pre>
    <pre class="section">
    class Facture{
        <span class="cornBlue">const</span> TVA = 20;
        private <span class="orange">static</span> $att;
        public function __construct(){
            self::$att = "POO";
        }
        public <span class="orange">static</span> function montantTTC($prixHT){
            return $prixHT * (1 + <span class="orange">self::TVA</span>/100);
        }
        public function affichageAttribut(){
            return <span class="orange">self::$att</span>;
        }
        public function modifierAttribut($value){
            <span class="orange">self::$att</span> = $value;
        }
    }
    echo Facture::montantTTC(1500);
    <div class="green">// L'instanciation d'une classe n'est plus nécessaire pour un accès statique</div>
    $obj = new Facture();
    echo $obj->afficherAttribut();
    $obj->modifierAttribut("<span class="cornBlue">POO en PHP</span>"); 
    echo "< br>";
    <span class="green">// l'attribut statique $att sera écrasé dans la classe et non l'objet</span>
    $obj2 = new Facture();
    $obj2->affichageAttribut();
    <span class="green">// affichera "POO en PHP"</span>

    </pre>
    </div>
</body>
</html>