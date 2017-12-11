<?php 

/*
	Commission Calculator
	1. Object Oriented PHP
	2. Adapted Web layout: https://youtu.be/Sb5qOa3R4hY?list=PLU6viZC7S2-z-ki4oQjPZUnbHGkld9WLe

	For Imrpovements:
	1. Contents / Design
	2. Money Format (Selection)
*/

require('commission.php');

//POST the parameters
if(isset($_POST['submit']))
{
	$range_from = $_POST['range_from'];
	$range_to = $_POST['range_to'];
	$admin_fee = 250; //temp value
	$cmsn_first_prcnt = $_POST['percent_first'];
	$cmsn_first_rate = 500000; //temp value
	$cmsn_second_prcnt =  $_POST['percent_second'];

	$commission = new Commission($range_from, $range_to, $admin_fee, $cmsn_first_prcnt, $cmsn_first_rate, $cmsn_second_prcnt);


	$commission->getMidpoint();
	$commission->getAdminFee();
	$commission->getCmsnFirstRate();
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commission Calculator</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="container">
		<h1 class="heading">Commission Calculator</h1>
		<div class="wrapper">
			<div class="info">
				<ul>
					<li>Lorem Ipsum</li>
					<li>Lorem Ipsum</li>
					<li>Lorem Ipsum</li>
				</ul>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
					incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
					nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div><!-- end info div -->
			<div class="calculator">
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

					<table>
						<tr>
							<td>
								<label>Price Range</label>
							</td>
							<td>
								<input type="text" name="range_from">
								<input type="text" name="range_to">
							</td>
						</tr>
						<tr>
							<td>
								<label>First  Percentage</label>
							</td>
							<td>
								<input type="text" name="percent_first">
							</td>
						</tr>
						<tr>
							<td>
								<label>Second  Percentage</label>
							</td>
							<td>
								<input type="text" name="percent_second">
							</td>
						</tr>
					</table>	
					</p>
					<p class="full">
						<!-- Hidden Fields: Temp -->
						<input type="hidden" name="admin_fee" value="250">

						<!-- Submit -->
						<button type="submit" name="submit">Compute</button>
					</p>

				</form>
				<!-- Display result -->
					<h2>
						<?php 

							


							if(isset($_POST['submit'])){ 
								
								//compute commission
								$commission_rate = $commission->getCmsnSecondRate($commission->getMidpoint(),  $cmsn_first_rate);
							
								echo "Commision Rate: $ ".$commission_rate; 
							} 
						?>
					</h2>
			</div><!-- end calculator div -->
		</div><!-- end wrapper div -->
	</div><!-- End container div -->	

</body>
</html>