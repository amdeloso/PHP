<?php

/* 
    Adapted by: Annie 'Vany' Deloso
    Source: https://www.youtube.com/watch?v=-uLbG7nJCJw

*/

class Dbmanager{

        public static $connection;
    
        private function __construct(){
            echo 'Connection created';
        }
    
        public static function Connect(){

            if(!isset(self::$connection)){
                self::$connection=new Dbmanager();
            }

            return self::$connection;

        }
}


$connect = Dbmanager::Connect();
$connect2 = Dbmanager::Connect();

?>