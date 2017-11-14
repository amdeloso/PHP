<?php
	//set cookies ->time
	setcookie('username', 'Vany', time() + (86400 * 30 ));

	//unset cookies -> time difference
	setcookie('username', 'Vany', time() - 3600);


	//check if there are set cookie
	if(count($_COOKIE) > 0){
		echo "There are ".count($_COOKIE)." cookies saved <br>";
	}else{
		echo "There are no cookies saved <br>";
	}


	if(isset($_COOKIE['username'])){
		echo "User ".$_COOKIE['username']." is set <br>";
	}else{
		echo "User is not set";
	}

?>