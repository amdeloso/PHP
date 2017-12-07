<?php 

require('commission.php');

//use PHP SELF

//POST the parameters
$range_from = 1000000;
$range_to = 1200000;
$admin_fee = 250;
$cmsn_first_prcnt = 4;
$cmsn_first_rate = 500000;
$cmsn_second_prcnt = 2.5;


$commission = new Commission($range_from, $range_to, $admin_fee, $cmsn_first_prcnt, $cmsn_first_rate, $cmsn_second_prcnt);


echo $commission->getMidpoint();
echo "<br>";
echo $commission->getAdminFee();
echo "<br>";
echo $commission->getCmsnFirstRate();
echo "<br>";
echo $commission->getCmsnSecondRate($commission->getMidpoint(),  $cmsn_first_rate);
echo "<br>";


?>