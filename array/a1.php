<?php

//Multidimensional Array
 
$students =[

    ["shalu",21,"lucknow"],
    ["abhishek",20,"jugauli"],
    ["yash",19,"jalaun"]
];

$students[3]=["komal",18,"janki puram"];

print_r($students);


echo $students[0][0];
echo $students[1][1];
?>