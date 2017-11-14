<?php
/*
PHP Docu: http://php.net/manual/en/book.filter.php
Traversy: https://youtu.be/pfY9LwcsH3A

*/


/*
	//FILTERS & VALIDATIONS

   //#1 Basic > check for posted data
	if(filter_has_var(INPUT_POST, 'data')){
		echo 'Data found';
	}else{
		echo 'No Data';
	}


	//#2 Validation of data > using email 
	if(filter_has_var(INPUT_POST, 'data')){
		if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
			echo 'Email is valid';
		}else{
			echo 'Email is not valid';
		}
	}

	


	//#2 Validation of data plus sanitation of data  > using email 
	if(filter_has_var(INPUT_POST, 'data')){
		$email=$_POST['data'];

		//sanitize data
		 $email = filter_var($email, FILTER_SANITIZE_EMAIL);
		 echo $email;

		 //use filter_var instead of filter input 
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo 'Email is valid';
		}else{
			echo 'Email is not valid';
		};
	}

	

	$var = 'adad';

	//#3 validate int
	if(filter_var($var, FILTER_VALIDATE_INT)){
		echo $var. ' is a number';

	}else{
		echo $var.' is NOT a number';
	}
	
	//#4 sanitize int
	$var = 'afsdf4lk43654kk';
	var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));


	//#5 sanitize special chars
	$var = '<script>alert(1)</script>';
	echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
	


	//#6 use arrays with multiple fields
	$filters = array(
		'data' => FILTER_VALIDATE_EMAIL,
		'data2' => array(
			'filter' => FILTER_VALIDATE_INT,
			'options' => array(
				'min_range' => 1,
				'max_range' => 100
			)
		 )

	 );

	print_r(filter_input_array(INPUT_POST, $filters));
	*/

	//#7 using FILTER_VAR_ARRAY()
	//Initialize value
	$arr = array(
		'name' => 'vany',
		'age' => '35',
		'email' => 'vany@gmail.com' 
	);

	$filters = array(
		'name' => array(
			'filter' => FILTER_CALLBACK,
			'options' => 'ucwords' //ucwords callback
		),
		'age' => array(
			'filter' => FILTER_VALIDATE_INT,
			'options' => array(
				'min_range' => 1,
				'max_range' => 120
			)
		),
		'email' => FILTER_VALIDATE_EMAIL
		

	);

	print_r(filter_var_array($arr, $filters));

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="data">
	<input type="text" name="data2">
	<button type="submit">Submit</button>
	
</form>