<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
    <style>
        .presentation {
            font-size: 1.4em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>

    <h1>Connection à une base de données avec PDO</h1>

    <?php
        
        require("pdo/db-config.php");

    ?>

    <pre class="presentation">
    try{
        $connexion = 'mysql:host='.HOST_NAME.';dbname='.DB_NAME.';port='.NUMBER_PORT;
        $monPDO = new PDO($connexion,USER_NAME,PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e){
        $message = "Erreur de connexion à la DataBase : " . $e->getMessage();
        die($message);
    }

    if($monPDO){
        $limitationPrice = 130;
        $req = "select * from fruit where poids >= :paramPrice";
        $statement = $monPDO->prepare($req);
        $statement->bindValue(':paramPrice', $limitationPrice, PDO::PARAM_INT);
        $statement->execute();
        $res = $statement->fetchAll();
        echo "< pre>< b>";
        print_r($res);
    }
    </pre>

    <?php
        try{
            $connexion = 'mysql:host='.HOST_NAME.';dbname='.DB_NAME.';port='.NUMBER_PORT;
            $monPDO = new PDO($connexion,USER_NAME,PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch(PDOException $e){
            $message = "Erreur de connexion à la DataBase : " . $e->getMessage();
            die($message);
        }

        if($monPDO){
            $limitationPrice = 130;
            $req = "select * from fruit where poids >= :paramPrice";
            $statement = $monPDO->prepare($req);
            $statement->bindValue(':paramPrice', $limitationPrice, PDO::PARAM_INT);
            $statement->execute();
            $res = $statement->fetchAll();
            echo "<pre><b>";
            print_r($res);
        }
    ?>
    
</body>
</html>