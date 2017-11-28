<?php 

require('basic_customer.php');

//#3 INHERITANCE

class Subscriber extends Customer{
	public $plan;

	public function __construct($id, $name, $email, $address, $account, $plan){

		//$plan excluded in the parameters::it is not part of the Customer parent class
		parent::__construct($id, $name, $email,  $address, $account);

		$this->plan = $plan;
	}

	public function getAccount(){
		return $this->account;
	}

}



$subscriber = new Subscriber(1, 'Vany', 'amdeloso@yahoo.con', 'Auckland', 1111, 'Premier');

$subscriber->getAccount();
 ?>