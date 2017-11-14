<?php
// ######## please do not alter the following code ########
$products = array(
array(“name” => “Sledgehammer”, “price” => 125.75),
array(“name” => “Axe”, “price” => 190.50),
array(“name” => “Bandsaw”, “price” => 562.13),
array(“name” => “Chisel”, “price” => 12.9),
array(“name” => “Hacksaw”, “price” => 18.45)
);
// ##################################################



/*foreach ($products as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}
*/


foreach ($products as $key1 => $value1) {
	
	foreach ($value1 as $key2 => $value2) {
		

		echo $key2." ". $value2."<br>";
		
	}

}

/*

$products["name"];*/

?>