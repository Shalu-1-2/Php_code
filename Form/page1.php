<?php


if(isset($_POST["add"])){
$num1 =$_POST["num1"] ?? "";
$num2 =$_POST["num2"] ?? "";

$result = $num1+$num2;

echo "<br>";
echo "<h1>Addition Task</h1>";
echo "Number 1 is :- $num1"."<br>";
echo "Number 2 is :- $num2"."<br>";
echo "Result is :- $result"."<br>";
}


?>