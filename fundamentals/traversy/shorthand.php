<?php

	//Ternary & Shorthands
   
	$loggedIn = false;
	$array = [1,2,3,4,5,6];

	 //basic
	echo "<strong>Using an if..else condition</strong> <br>";
	if($loggedIn){
		echo 'You are logged in';
	}else{
		echo 'You are NOT loggedIn';
	}

	//#1 basicusing Ternary operator
	echo "<br><br><strong>Basic ternary </strong><br>";
	
	echo ($loggedIn) ? 'You are logged in' : 'You are NOT loggedIn';


	//#2 assigning to variables 
	echo "<br><br><strong>Assigning to variables</strong><br>";

	$isRegistered = ($loggedIn == true) ? true : false; 
	echo $isRegistered;


	//#3 nested shorthand statements 
	echo "<br><br><strong>Assigning to variables</strong><br>";

	$age=20;
	$score=15;

	echo "Your score is: ".($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional'): ($age < 10 ? 'Horrible' : 'Average'))





?>

<!-- Embedding statements in HTML -->
<!-- Pattern #1 possible to miss out the {} -->
<div>
	<?php if($loggedIn) { ?>
		<h1>Welcome User</h1>
	<?php } else { ?>
		<h1>Welcome Guest</h1>
	<?php } ?>
</div>

<!-- Pattern #2 better pattern for HTML embedding -->
<div>
	<?php if($loggedIn): ?>
		<h1>Welcome User</h1>
	<?php else: ?>
		<h1>Welcome Guest</h1>
	<?php endif; ?>	
</div>

<!-- Pattern #3 using array foreach -->
<div>
	<?php foreach($array as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>	
</div>


<!-- Pattern#4 using for lopp -->
<div>
	<?php for($i=0; $i < 10; $i++): ?>
		<li><?php echo $i; ?></li>	
	<?php endfor;?>
</div>

