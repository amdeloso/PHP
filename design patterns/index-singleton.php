<!-- 

    Adapted by: Annie 'Vany' Deloso
    Sources:
    1. http://www.phptherightway.com/pages/Design-Patterns.html
    2. https://www.youtube.com/watch?v=qWaFiOGwU-8
 -->

<?php

function __autoload($class_name){
    include 'classes/'.$class_name.'.php';
}

class Connection{

    private function __construct(){
        echo 'New object created <br>';
    }

    public static function getInstance(){
        static $instance = null;
        if(null==$instance){
            $instance=new static();
        }else{
            echo 'Using existing object <br>';
        }
    }
}




$object1 = Connection::getInstance();
$object2 = Connection::getInstance();
$object3 = Connection::getInstance();

?>