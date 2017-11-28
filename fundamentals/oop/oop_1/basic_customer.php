<?php 

/*

Back to Basics: PHP OOP
https://youtu.be/dQxuYRNbL_M

*/

class Customer{

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
	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getAddress(){
		return $this->address;
	}
	
}


$customer = new Customer(1, 'Vany', 'amdeloso@yahoo.con', 'Auckland', 1111);

//#1 can use this method when all the properties/attributes are PUBLIC
//can call variables directly to constructor method
//echo $customer->name;

echo "<br>";

//#2 can use this method when all the properties/attributes are PRIVATE
//PRIVATE properties/attributes & PUBLIC methods
echo $customer->getId();
echo "<br>";
echo $customer->getName();
echo "<br>";
echo $customer->getEmail();
echo "<br>";
echo $customer->getAddress();
echo "<br>";
 
?>