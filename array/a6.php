<?php

$numbers =[10,20,30,40,50,60];

$result =array_slice($numbers,2,4);
// $result =array_slice($numbers,1,4);
// $result =array_slice($numbers,3,5);

print_r($result);

  echo "<br>";

array_splice($numbers,1,3);

print_r($numbers);
  echo "<br>";

print_r($result);

  echo "<br>";

 
  echo array_sum($numbers);
  echo "<br>";

  echo array_product($numbers);
  echo "<br>";

  echo min($numbers);
  echo "<br>";

  echo max($numbers);



?>