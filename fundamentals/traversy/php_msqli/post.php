<?php 
	require('dbmanager/config.php');
	require('dbmanager/db.php');

	//get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	//query
	$query = 'SELECT * FROM posts WHERE id = '.$id;

	//get result
	$result = mysqli_query($conn, $query);

	//Fetch data specific to id using associative array
	$post = mysqli_fetch_assoc($result);
	
	//Free Result
	mysqli_free_result($result);

	//Close connection
	mysqli_close($conn);

	include('inc/header.php');
	include('inc/navbar.php');
 ?>
 
 	<div class="container">
 		<a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
	 	<h1><?php echo $post['title']; ?></h1>
		<small>Created at <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
		<p><?php echo $post['body']; ?></p>	 		
 	</div>

<?php 

	include('inc/footer.php'); 

?>