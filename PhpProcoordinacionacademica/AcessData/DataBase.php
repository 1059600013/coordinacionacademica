<?php
class DataBase 
{
    private static $dbName = 'coordinacionacademicaremington' ;
    private static $dbHost = 'localhot' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
            
    private static  $cont = null;
    
    public function _construct() {
        exit('Init function is not allowed');
}

public static function connect()
        {
    //one connection through whole application
    if ( null ==self::$cont)
    {
    try 
    {
    
    self::$cont = new PDO("mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
    }
 catch (PDOException $e) 
 {
    die($e->getMessage());
  } 

  }
 return self::$cont;
}
public static function disconnect() 
{
 self::$cont = null;
}
}
?>