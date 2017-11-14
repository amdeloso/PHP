<?php 


	//Connect
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if(mysqli_connect_errno()){

		echo 'Fail to connect to server '.mysqli_connect_errno();
	}

 ?>;