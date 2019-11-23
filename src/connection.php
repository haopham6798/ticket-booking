<?php
    // namespace WS\ticket;
    // class DB{
    //     private static $instance = NULL;
    //     private function _contruct() {}
    //     private function _clone() {}

    //     public static function getInstance() {
    //         if(!isset(self::$instance)){
    //             $driver = 'mysql';
    //             $host ='localhost';
    //             $name = "wsdb";
    //             $option[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;
    //             $dsn = "$driver:host=$host;dbname=$name;charset=utf8";
    //             self::$instance = new \PDO($dsn,'root','', $option);
    //         }
    //         return self::$instance;
    //     }
    // }
    class DB
    {
        private static $instance = NULl;
        public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
            self::$instance = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
            self::$instance->exec("SET NAMES 'utf8'");
            //echo "connected successfully";
            } catch (PDOException $ex) {
            die($ex->getMessage());
            }
        }
        return self::$instance;
        }
    }
?>