<?php

//  $a = 10;

// //  $a++;

//  $a--;

// echo $a;

$age = 10;

if($age >=18){
    echo "you can vote ";
}
else{
    echo " you can't vote";
}


$user = "Admin";
$user1 ="employee";
if($user1 == "Admin"){
    echo "<br>";
    echo"login successfully";
}
else{
        echo "<br>";
    echo "invailid user";
}

$marks =75;
if($marks>=90){
    echo "Grade A++";
}
else if ($marks >= 80){
    echo "Grande A";
}
else if ($marks >= 70){
    echo "Grade B";
}
elseif($marks >= 50){
    echo "Grade C";
}
else{
    echo "Fail";
}
?>