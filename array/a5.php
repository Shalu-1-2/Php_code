<?php

$student=[
    "Shalu"=>22,
    "Abhishek"=>25,
    "Shyam"=>23,
    "Amit"=>50,
];

asort($student);
print_r($student);

echo "<br>";
arsort($student);
print_r($student);

echo "<br>";

ksort($student);
print_r($student);



?>