<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 9</title>
    <style>
        .boxClass {
            color: cornflowerblue;
            font-size: 1.5em;
            padding: 2vh 0 0 3vw;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>

    <h1>Les constantes de classe</h1>
    <h2>Exercice 9 :</h2>
    <h3>Ecriture du code :</h3>
    <pre>
    class Voiture{
        private $marque;
        private $modele;
        private $couleur;
        private $nbPortes;
        private $estElectrique;
        private $prixTTC;

        const MINI = 3;
        const NORMAL = 5;
        const TVA = 20;

        public function __construct($marque, $modele, $couleur, $nbPortes, $estElectrique, $prixHT){
            $this->marque = $marque;
            $this->modele = $modele;
            $this->couleur = $couleur;
            $this->nbPortes = $nbPortes;
            $this->estElectrique = $estElectrique;
            $this->prixTTC = $prixHT + $prixHT * (self::TVA / 100);
        }

        public function getMarque(){ return $this->marque; }
        public function setMarque($marque){ $this->marque = $marque;  }
        public function getModele(){ return $this->modele; }
        public function setModele($modele){ $this->modele = $modele; }
        public function getCouleur(){ return $this->couleur; }
        public function setCouleur($couleur){ $this->couleur = $couleur; }
        public function getnbPortes(){ return $this->nbPortes; }
        public function setnbPortes($nbPortes){ $this->nbPortes = $nbPortes; }
        public function getEstElectrique(){ return $this->estElectrique; }
        public function setEstElectrique($estElectrique){ $this->estElectrique = $estElectrique; }
        public function getPrix(){ return $this->prix; }
        public function setPrix($prix){ $this->prix = $prix; }
    }
    </pre>
    <h3>Résultat : </h3>
    <?php

        class Voiture{
            private $marque;
            private $modele;
            private $couleur;
            private $nbPortes;
            private $estElectrique;
            private $prixTTC;

            const MINI = 3;
            const NORMAL = 5;
            const TVA = 20;

            public function __construct($marque, $modele, $couleur, $nbPortes, $estElectrique, $prixHT){
                $this->marque = $marque;
                $this->modele = $modele;
                $this->couleur = $couleur;
                $this->nbPortes = $nbPortes;
                $this->estElectrique = $estElectrique;
                $this->prixTTC = $prixHT + $prixHT * (self::TVA / 100);
            }

            public function getMarque(){ return $this->marque; }
            public function setMarque($marque){ $this->marque = $marque;  }
            public function getModele(){ return $this->modele; }
            public function setModele($modele){ $this->modele = $modele; }
            public function getCouleur(){ return $this->couleur; }
            public function setCouleur($couleur){ $this->couleur = $couleur; }
            public function getnbPortes(){ return $this->nbPortes; }
            public function setnbPortes($nbPortes){ $this->nbPortes = $nbPortes; }
            public function getEstElectrique(){ return $this->estElectrique; }
            public function setEstElectrique($estElectrique){ $this->estElectrique = $estElectrique; }
            public function getPrix(){ return $this->prix; }
            public function setPrix($prix){ $this->prix = $prix; }
        }
        
        $v1 = new voiture("Yotota", "Ryas", "noir", Voiture::MINI, 18500);
        $v2 = new voiture("Yotota", "Risau", "rouge", Voiture::NORMAL, 15500);
        $v2->setNbPortes(3);
        $v3 = new voiture("Troen", "5C", "rouge", Voiture::MINI, 16500);
    ?>
</body>
</html>