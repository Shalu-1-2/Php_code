<?php

$num1 = 20;
$num2 = 8;


echo "Sum:- ".$num1+$num2."<br>";
echo "Subtraction:- ".$num1-$num2."<br>";
echo "Multipication:- ".$num1*$num2."<br>";
echo "Division:- ".$num1/$num2."<br>";
echo "Modulus:- ".$num1%$num2;


function addition($a, $b)
{
    return $a + $b;
}

function subtraction($a, $b)
{
    return $a - $b;
}

function multiplication($a, $b)
{
    return $a * $b;
}

function division($a, $b)
{
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Cannot divide by zero";
    }
}

$add = addition($num1, $num2);
$sub = subtraction($num1, $num2);
$mul = multiplication($num1, $num2);
$div = division($num1, $num2);
$mod = $num1 % $num2;


if ($num1 > 0) {
    $numberType = "Positive";
} elseif ($num1 < 0) {
    $numberType = "Negative";
} else {
    $numberType = "Zero";
}


if ($num1 % 2 == 0) {
    $evenOdd = "Even";
} else {
    $evenOdd = "Odd";
}


if ($num1 > $num2) {
    $greaterNumber = "First number is greater";
} elseif ($num2 > $num1) {
    $greaterNumber = "Second number is greater";
} else {
    $greaterNumber = "Both numbers are equal";
}


echo "<h2>Calculator & Number Analyzer</h2>";

echo "Number 1: " . $num1 . "<br>";
echo "Number 2: " . $num2 . "<br><br>";

echo "Addition: " . $add . "<br>";
echo "Subtraction: " . $sub . "<br>";
echo "Multiplication: " . $mul . "<br>";
echo "Division: " . $div . "<br>";
echo "Modulus: " . $mod . "<br><br>";

echo "Number 1 Type: " . $numberType . "<br>";
echo "Number 1 Even/Odd: " . $evenOdd . "<br><br>";

echo "Greater Number: " . $greaterNumber;

?>
