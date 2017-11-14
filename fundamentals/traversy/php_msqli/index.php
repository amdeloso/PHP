<?php 
	require('dbmanager/config.php');
	require('dbmanager/db.php');

	//Create query
	$query = 'SELECT * FROM posts';

	//Get result
	$result = mysqli_query($conn, $query);

	//Fetch all date using associative array
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	//Free Result
	mysqli_free_result($result);

	//Close connection
	mysqli_close($conn);

	
 ?>

 	<div class="container">

	 	<h1>Posts</h1>
		 	<?php foreach ($posts as $post) : ?>

		 		<div class="well">
		 			<h3><?php echo $post['title']; ?></h3>
		 			<small>Created at <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
		 			<p><?php echo $post['body']; ?></p>
		 			<a class="btn btn-default" href="<?php echo ROOT_URL;?>post.php?id=<?php echo $post['id']; ?>">Read more..</a>
		 			
		 		</div>

		 	<?php endforeach; ?>
 	</div>

<?php 

	include('inc/footer.php'); 

?>