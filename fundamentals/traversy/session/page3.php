<?php 

	session_start();

	//TERNARY OPERATOR ?: to check if the session is a guest or not
	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Guest';
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
<h1>Hello <?php echo $name; ?></h1>
</body>
</html>

