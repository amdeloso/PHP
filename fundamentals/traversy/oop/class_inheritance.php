<?php 

	class Person{
		/*
			public - vars can be outside of the class
			private - can be accessed only in this class
			protected - can be accessed it in this class or class that extends the main class

		*/
		private $name;
		private $email;	

		//constructor method runs when an object is created
		//runs when object is instantiated

		public function __construct($name, $email){
			//set the name & email
			$this->name = $name;
			$this->email = $email;

			//echo 'Info created<br>';
			echo __CLASS__.' Info created<br>';
		}


		public function __destruct(){
			echo __CLASS__.' destroyed<br>';
		}



		//Setters & Getters method
		//$this - is used to reference something in the class
		//-> to access a property used

		//Set name
		public function setName($name){
			return $this->name = $name;
		}

		//Get name
		public function getName(){
			$this->name."<br>";
		}

		//Set email
		public function setEmail($email){
			$this->email = $email;
		}

		//Get email
		public function getEmail(){
			return $this->email."<br>";
		}


	}//end Person()

	//Customer class inheriting properties of Person class
	class Customer extends Person{
		private $balance;

		//inheritance
		public function __construct($name, $email, $balance){

			//call the parent constructor
			parent::__construct($name, $email, $balance);

			//set the balance
			$this->balance = $balance;

			echo "A new ".__CLASS__." has been created <br>";

		}

		//Set balance
		public function setBalance($balance){
			$this->balance = $balance;
		}

		//Get balance
		public function getBalance(){
			return $this->balance."<br>";
		}
	}//end Customer()

	$customer1 = new Customer('Vany', 'test@gmail.com', 300);

	echo $customer1->getBalance();







?>	