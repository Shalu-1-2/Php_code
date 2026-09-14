<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is my first project </h1>
    <?php 
    echo"hello guys";
    ?>

    <?php

$name ="shalu";
$lastname = "kushwaha";
$age =20;
echo $name ." ".$lastname."<br>";

$weight =50.55;

$islogin = true;
$lastname =  null;
//  echo $name , $lastname , $age;
// print $name;

// $name ="abhishek";

// var_dump($name);
// echo "<br>";
// var_dump($age);
// echo "<br>";

// var_dump($weight);
// echo "<br>";

// var_dump($islogin);
// echo "<br>";

// var_dump($lastname);


$student =["ram","shyam","rama" ,20];

var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";

var_dump($weight);
echo "<br>";

var_dump($islogin);
echo "<br>";

var_dump($lastname);
echo "<br>";

var_dump($student);

define ("COLLEGE" ,"GGPL");

echo "<br>";
echo COLLEGE;

const SCHOOL = "M.L.B Inter College"; //const variable change nhi hota h 
echo "<br>";
echo SCHOOL;



?>
</body>
</html> 