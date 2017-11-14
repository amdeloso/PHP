<?php

	/*
		The source codes are compiled from different sources

		References:
		1. https://youtu.be/RzMjwICWKr4


	*/

	if(isset($_POST['submit'])){
		$username = htmlentities($_POST['username']);

		//start use cookies
		setcookie('username', $username, time()+3600); //set to 1 hour

		header('Location: page2.php');
	}
?>
<html>
<head>
	<title>PHP Cookies</title>
</head>
<body>
	<form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
		<input type="text" name="username" placeholder="Enter Username">
		<input type="text" name="password" placeholder="Enter Password">
		<input type="submit" name="submit" value="Submit">
	</form>

	<a href="page2.php">Set & Unset Cookies</a>
	<br>
	<a href="page3.php">Using an Array</a>
</body>
</html>