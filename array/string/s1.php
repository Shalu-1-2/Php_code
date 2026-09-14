<?php

$name = "digicoders technologies";
echo  strlen($name);
echo "<br>";
echo strtoupper($name);
echo "<br>";
echo strtolower($name);

echo "<br>";
echo ucfirst($name);
echo "<br>";
echo ucwords($name);
echo "<br>";
echo substr($name,0,10);
echo "<br>";

$colors ="Red,Green,Blue";
$data = explode(",",$colors);
print_r($data);

$rang =["RED","GREEN","YELLOW"]; +
$data =implode(",",$rang);
print_r($data);

?>