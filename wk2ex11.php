<?php

$total = 0;

$mymarks["CO450"] = 98;
$mymarks["CO451"] = 98;
$mymarks["CO452"] = 87;
$mymarks["CO453"] = 89;
$mymarks["CO454"] = 73;
$mymarks["CO455"] = 90;

foreach($mymarks as $key => $value){
    echo "My mark for $key module is $value. <br/>";
    $total = $total + $value;
}
$average = $total / 6;
echo "<br/>My average mark for these modules is $average. <br/>";

?>