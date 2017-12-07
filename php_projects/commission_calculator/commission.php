<?php 

class Commission{

	public $range_from;
	public $range_to;
	public $midpoint;
	public $admin_fee;
	public $cmsn_first_prcnt;
	public $cmsn_second_prcnt;
	public $cmsn_first_rate;
	public $cmsn_second_rate;

	public $total_cmsn_second_rate;



	public function __construct($range_from, $range_to, $admin_fee, $cmsn_first_prcnt, $cmsn_first_rate, $cmsn_second_prcnt){

		$this->range_from = $range_from;
		$this->range_to = $range_to;
		$this->admin_fee = $admin_fee;
		$this->cmsn_first_prcnt =  $cmsn_first_prcnt;
		$this->cmsn_first_rate = $cmsn_first_rate;
		$this->cmsn_second_prcnt = $cmsn_second_prcnt;
		
	}

	//Compute midpoint
	public function getMidpoint(){

		$midpoint = ($this->range_from + $this->range_to) / 2;

		return $midpoint;
	}


	//Admin Fee
	public function getAdminFee(){
		
		return $this->admin_fee;

	}

	//Get first percentage rate 
	//Standard $cmsn_first_rate is $500,000
	//Remaining Balance = $midpoint - $cmsn_first_rate
	public function getCmsnFirstRate(){

		$total_cmsn_first_rate = ($this->cmsn_first_prcnt / 100) * $this->cmsn_first_rate;

		return $total_cmsn_first_rate;

	}

	//Get second percentage rate 
	//Standard $cmsn_first_prcnt is 2.5% of the remaining balance of the midpoint
	public function getCmsnSecondRate($midpoint, $cmsn_first_rate){

		$this->midpoint = $midpoint;
		$this->$cmsn_first_rate = $cmsn_first_rate;


		$total_cmsn_second_rate = ($this->midpoint - $this->$cmsn_first_rate) *  ($this->cmsn_second_prcnt / 100);

		return $total_cmsn_second_rate;
	}

	//Commission Total
	public function getCmsnTotal($total_cmsn_first_rate, $total_cmsn_second_rate){

		$this->$total_cmsn_first_rate = $total_cmsn_first_rate;
		$this->$total_cmsn_second_rate = $total_cmsn_second_rate;

		$cmsntotal = $this->$admin_fee + $this->$total_cmsn_first_rate + $this->$total_cmsn_first_rate;

		return $cmsntotal;

	}



}




?>