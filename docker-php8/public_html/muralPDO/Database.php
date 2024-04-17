<?php

    class Database{

        static $db;
    
        public static function getConnection(){

            if(self::$db == null){
                self::$db = new PDO("mysql:host=mariadb;dbname=tads","root","root");
            }
            return self::$db;
        }
       

        function closeConnection(){
            self::$db->close();
        }
    }
?>