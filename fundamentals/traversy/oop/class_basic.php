<?php 

	class Person{
		/*
			public - vars can be outside of the class
			private - can be accessed only in this class
			protected - can be accessed it in this class or class that extends the main class

		*/
		private $name;
		private $email;	

		//Setters & Getters method
		//$this - is used to reference something in the class
		//-> to access a property used

		//Set name
		public function setName($name){
			return $this->name = $name;
		}

		//Get name
		public function getName(){
			return $this->name;
		}

		//Set email
		public function setEmail($email){
			return $this->email = $email;
		}

		//Get email
		public function getEmail(){
			return $this->email;
		}


	}


	//instantiate a person object
	$person1 = new Person();

	$person1->setName('Vany Bannits');
	echo $person1->getName();

	$person1->setEmail('test@test.com');
	echo $person1->getEmail();





?>	