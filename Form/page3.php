<?php


if(isset($_POST["mul"])){
$num1 =$_POST["num1"] ?? "";
$num2 =$_POST["num2"] ?? "";

$result = $num1*$num2;

echo "<br>";
echo "<h1> Multiplication Task</h1>";
echo "Number 1 is :- $num1"."<br>";
echo "Number 2 is :- $num2"."<br>";
echo "Result is :- $result"."<br>";
}

?>