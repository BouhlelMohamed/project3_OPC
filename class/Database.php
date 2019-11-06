<?php


class Database
{
    


    /**
     * une fonction doit absolument retourner quelque chose
     *
     * @return PDO
     */
    public static function getPdo()
    {
            $database = new PDO('mysql:host=localhost;dbname=;charset=utf8', '', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);    
            return $database;
    }
        

}


$db = new Database;
$database = $db->getPdo();