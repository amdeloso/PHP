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
			return $this->name."<br>";
		}

		//Set email
		public function setEmail($email){
			return $this->email = $email;
		}

		//Get email
		public function getEmail(){
			return $this->email."<br>";
		}


	}


	//instantiate a person object, calls the constructor method
	$person1 = new Person('Vany', 'test@test.com');

	echo $person1->getName().$person1->getEmail();







?>	