<?php

/*

26072017 Learning Singleton Design Pattern
Source: https://youtu.be/UPfdb5y2SOI

*/


class Database {

    public static $instance;

    public static function getInstance(){
        Database::$instance=new Database();
        return Database::$instance;
    }

    private function __construct(){

    }

    public function getQuery(){
        return "SELECT * FROM table";
    }

}

$db = Database::getInstance();
echo $db->getQuery();


?>