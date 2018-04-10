<?php class Database
{
    
    //private propertiess
    private static $user = 'uatbugs';
    private static $pass = 'mysql123';
    private static $dsn = "mysql:host=a2plcpnl0830.prod.iad2.secureserver.net;port=3306;dbname=uatbugs";
    //private static $dsn = "mysql:host=localhost;dbname=final_project";
    private static $db;

//get pdo connection
    public static function getDb(){
        if(!isset(self::$db)) {
            try {
                self::$db = new PDO (self::$dsn, self::$user, self::$pass);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } 
            catch (PDOException $e) {
            $msg = $e->getMessage();
            echo $msg;
            exit();
            }
        }
        return self::$db;
    }
}
?>