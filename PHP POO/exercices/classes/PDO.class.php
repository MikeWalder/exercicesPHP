<?php
    class myPDO{
        private const HOST_NAME = "localhost";
        private const DB_NAME = "db_panierfruit";
        private const USER_NAME = "root";
        private const PWD = "";
        private const NUMBER_PORT = 3308;

        private static $myPDOinstance = null;

        public static function getPDO(){
            if(is_null(self::$myPDOinstance)){
                try{
                    $connexion = 'mysql:host='.self::HOST_NAME.';dbname='.self::DB_NAME.';port='.self::NUMBER_PORT;
                    self::$myPDOinstance = new PDO($connexion,self::USER_NAME,self::PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                } catch(PDOException $e){
                    $message = "Erreur de connexion à la DataBase : " . $e->getMessage();
                    die($message);
                }
                self::$myPDOinstance->exec("SET CHARACTER SET UTF8");
            }
            return self::$myPDOinstance;
        }
    }

?>