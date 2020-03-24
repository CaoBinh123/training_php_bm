<?php
namespace Config;

use PDO;

class Database
{
    private static $bdd = null;

    public static function getBdd()
    {
        if (is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost;dbname=mvc", 'root', '');
        }
        return self::$bdd;
    }

    public function executeQuery($sql)
    {
        // self::$bdd = Database::getBdd();
        $stt = self::$bdd->prepare($sql);
        $stt->execute();
        return $stt->fetchAll();
    }

    public function executeNonQuery($sql, $array = [])
    {
        // self::$bdd = Database::getBdd();
        $stt = self::$bdd->prepare($sql);
        $result = $stt->execute($array);
        return $result;
    }
}
