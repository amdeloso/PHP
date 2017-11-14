<?php
	//using associative array
	$user = ['name'=>'Brad', 'email'=>'test@test.com', 'age'=>35];

	//serialize to prepare data to be stored
	$user = serialize($user);


	//set cookie 
	setcookie('user', $user, time() + (86400 * 30));

	//show serialized array $user
	echo $user;

	//set which array key to show
	$user = unserialize($_COOKIE['user']);

	echo $user['name'];

?>