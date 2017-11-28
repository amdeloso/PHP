<?php 

/*

Notes:

1. $this-> + (property/attribute) is not used, self:: + (property/attribute) is the standard


*/

class User{

	public $username;
	public $password;
	public static $passwordLength = 5;


	public static function getPasswordLength(){
		return self::$passwordLength;
	}

}

echo User::$passwordLength;

?>