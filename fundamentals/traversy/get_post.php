<?php
	
	//using GET Superglobals
	if(isset($_GET['name'])){
		//print_r($_GET);
		 $name = htmlentities($_GET['name']);
		 //echo $name;
	}

	/*
	//using POST Superglobals
	if(isset($_POST['name'])){
		//print_r($_POST);
		 $name = htmlentities($_POST['email']);
		 echo $name;
	}
	

	//using REQUEST Superglobals, can work either POST or GET method
	if(isset($_REQUEST['name'])){
		//print_r($_REQUEST);
		 $name = htmlentities($_REQUEST['email']);
		 echo $name;
	}

	//using SERVER Superglobals
	echo $_SERVER['QUERY_STRING'];
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<form method="POST" action="get_post.php">
		<div>
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<input type="submit" name="Submit">
	</form>
	<ul>
		<li>
			<a href="get_post.php?name=Steve">Steve</a>
		</li>
		<li>
			<a href="get_post.php?name=Brad">Brad</a>
		</li>
	</ul>
	<?php echo "{$name}'s Profile"?>

</body>
</html>