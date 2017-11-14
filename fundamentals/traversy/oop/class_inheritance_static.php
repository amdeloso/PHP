<?php 

	class Person{
		/*
			public - vars can be outside of the class
			private - can be accessed only in this class
			protected - can be accessed it in this class or class that extends the main class

		*/
		private $name;
		private $email;	

		//#1.0 STATIC PROPS & METHODS
		//public static $ageLimit = 40;

		//#2.0 STATIC PROPS & METHODS
		private static $ageLimit = 40;

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

		//#2.1 STATIC PROPS & METHODS
		//if the property $ageLimit is private, need getters method
		//self is used not $this
		public static function getAgeLimit(){
			return self::$ageLimit;
		}


	}//end Person()

	/*
	//#1.1 STATIC PROPS & METHODS
	//used for public static $ageLimit ;
	echo Person::$ageLimit;

	*/



	/*
	//#2.2 STATIC PROPS & METHODS
	//used for private static $ageLimit	
	*/
	echo Person::getAgeLimit();
	




?>	