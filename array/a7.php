<?php
$array1 = [10,30];
$array2 = [60,70];
$result = array_merge($array1,$array2);

print_r($result);

echo "<br>";
foreach($result as $r){

echo "Array:-- ".$r."<br>";

}

?>