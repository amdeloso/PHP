<?php

	
//#1 Basic Array
$bigcats = array('Leopard', 'Lion', 'Tiger');

for ($i=0; $i < count($bigcats) ; $i++) { 
	echo $bigcats[$i]."<br>";
}


/*
$products = array(
array(“name” => “Sledgehammer”, “price” => 125.75),
array(“name” => “Axe”, “price” => 190.50),
array(“name” => “Bandsaw”, “price” => 562.13),
array(“name” => “Chisel”, “price” => 12.9),
array(“name” => “Hacksaw”, “price” => 18.45)
);

foreach ($products as $key1 => $value1) {

	echo $key1." ". $value1."<br>";
	
	foreach ($value1 as $key2 => $value2) {
		

		//echo $key2." ". $value2."<br>";
		
	}

}
*/

?>