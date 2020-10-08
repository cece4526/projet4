<?php

class DataBase 

{
    const DB_HOST = 'mysql:host=localhost;dbname=blog;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = '';
    //Méthode de connection à la base de données
    public function getConnection()
    {
        //tentative de connexion à la bas de données
        try{
            $connection = new PDO(self::DB_HOST,self::DB_USER,self::DB_PASS);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }
    }
    //On lève une erreur si la connexion échoue
    catch(Execption $errorConnection){
        die('Erreur de connection:'.$errorConnection->getMessage());
    }

}