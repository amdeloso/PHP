<?php

print <<<END

Hello World!
<br>
END;


$name='Vany';

echo "My name is $name <br>";

/* $channel =<<<_XML_

    <channel>
    <title>What's For Dinner</title>
    <link>http://menu.example.com/ </link>
    <description>Choose what to eat tonight.</description>
    </channel>

    _XML_;
    
    echo <<<END
    afdafdd
END;

print $channel; */

define("MINSIZE", 50);

echo MINSIZE;
echo constant("MINSIZE");
echo '<br>';

$array = array( 1, 2, 3, 4, 5);

foreach( $array as $value ) {
   echo "Value is $value <br />";
}

echo '<br>';
$i = 0;

while( $i < 10) {
   $i++;
   if( $i == 3 )break;
}
echo ("Loop stopped at i = $i" );

echo '<br>';

$array = array( 1, 2, 3, 4, 5);

foreach( $array as $value ) {
   if( $value == 3 )continue;
   echo "Value is $value <br />";
}




?>