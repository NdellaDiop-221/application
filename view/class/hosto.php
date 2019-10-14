<?php
class Database
{

    
    private static $pdoInstance = null;

    public static function getPDO():PDO{
        if(self ::$pdoInstance == null){
            self ::$pdoInstance = new PDO('mysql:host=localhost;dbname=hosto;charset=utf8', 'root', '',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXECEPTION,

            ]);
        }
        return self::$pdoInstance;
    }
}

