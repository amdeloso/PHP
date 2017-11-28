<?php 

/*

Back to Basics: PHP OOP
https://youtu.be/dQxuYRNbL_M


Abstact

*/

//#4 Abstract class & methods
abstract class Customer{

	private $id;
	private $name;
	private $email;
	private $address;

	//#3 Inheritance:: inherited by Subscriber class
	protected $account;


	//#1 
	public function __construct($id, $name, $email, $address, $account){
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->address = $address;
		$this->account = $account;
	}

	
	/*//magic methods
	public function __destruct(){
		echo "The destructor";
	}*/

	//#2 can use GET methods when the var is defined as PRIVATE
	//#4 abstract methods
	abstract public function getAccount();
	
}


 
?>