website
type of website 
static 
dynamic 

server client

php : personal home page first time name ye tha 
php : now hypertext preprocessor

devloped by - rasmus lerdrof 1994

server side scripting langauge


data type 
int
float
array
boolean -> true and false
null
string


    <?php 
    echo"hello guys";
    ?>

    <?php

$name ="shalu";
$lastname = "kushwaha";
$age =20;
echo $name ." ".$lastname."<br>";


  echo $name , $lastname , $age;
 print $name;

$name ="abhishek";

var_dump($name);
?>


PHP mein operators ko generally 10 main categories mein divide kiya jata hai:

Arithmetic Operators → + - * / % **
Assignment Operators → = += -= *= /= %=
Comparison Operators → == === != !== > < >= <=
Logical Operators → && AND || OR ! NOT
Increment / Decrement → ++ --
String Operators → . .=
Array Operators → + == === != !== <>
Conditional / Ternary Operators → ? :
Null Coalescing Operators → ?? ??=
Bitwise Operators → & | ^ ~ << >>



Arithmetic Operators → + - * / % **

| Operator | Meaning           | Example    |
| -------- | ----------------- | ---------- |
| `+`      | Addition          | `$a + $b`  |
| `-`      | Subtraction       | `$a - $b`  |
| `*`      | Multiplication    | `$a * $b`  |
| `/`      | Division          | `$a / $b`  |
| `%`      | Modulus/Remainder | `$a % $b`  |
| `**`     | Power             | `$a ** $b` |


Assignment Operators → = += -= *= /= %=
$a += 5;   // $a = $a + 5
$a -= 5;   // $a = $a - 5
$a *= 5;   // $a = $a * 5
$a /= 5;   // $a = $a / 5
$a %= 5;   // $a = $a % 5

Comparison Operators → == === != !== > < >= <=
| Operator | Meaning                     |
| -------- | --------------------------- |
| `==`     | Equal value                 |
| `===`    | Equal value + same datatype |
| `!=`     | Not equal                   |
| `!==`    | Not equal value/type        |
| `>`      | Greater than                |
| `<`      | Less than                   |
| `>=`     | Greater than or equal       |
| `<=`     | Less than or equal          |


Loops in php
******************************************
for loop 

syntax for loop:-

 <?php

for($i = 1; $i <= 5; $i++)
{
    echo $i . "<br>";
}

?>

*******************************************
while loop 

syntax for  while loop:-

<?php

$i = 1;

while($i <= 5)
{
    echo $i . "<br>";
    $i++;
}

?>
************************************************
do while loop

syntax for  do while loop:-

<?php

$i = 1;

do
{
    echo $i . "<br>";
    $i++;
}
while($i <= 5);

?>

*************************************************
foreach loop

Mostly arrays ke saath use hota hai.

<?php

$fruits = ["Apple", "Mango", "Banana"];

foreach($fruits as $fruit)
{
    echo $fruit . "<br>";
}

?>


************************************************

PHP me function ek reusable block of code hota hai. Ek baar function bana do, phir usko baar-baar call karke use kar sakte ho.

1. Simple Function
-------------------------
<?php

function hello()
{
    echo "Hello PHP";
}

hello();

?>

2. Parameter wala Function
-----------------------------
Function ko value pass kar sakte hain:

<?php

function greet($name)
{
    echo "Hello " . $name;
}

greet("Shalu");

?>

3. Return wala Function
----------------------------------
return se function value wapas deta hai:

<?php

function add($a, $b)
{
    return $a + $b;
}

$result = add(10, 20);

echo $result;

?>

4. Multiple Parameters
------------------------------------------
<?php

function multiply($a, $b)
{
    return $a * $b;
}

echo multiply(5, 4);

?>

***************************************************************************
PHP me recursive function wo function hota hai jo khud ko hi call karta hai.



PHP में Array
****************************
Array एक ऐसा variable है जिसमें हम एक से ज्यादा values को एक साथ store कर सकते हैं।

1. Indexed Array
---------------------
इसमें index 0 से शुरू होता है।

<?php

$fruits = array("Apple", "Mango", "Banana", "Orange");

echo $fruits[0]; // Apple
echo $fruits[2]; // Banana

?>

Short syntax:

$fruits = ["Apple", "Mango", "Banana", "Orange"];

2. Associative Array
--------------------------
इसमें numeric index की जगह key-value pair होता है।

<?php

$student = [
    "name" => "Shalu",
    "age" => 20,
    "course" => "IT"
];

echo $student["name"];
echo $student["course"];

?>
3. Multidimensional Array
----------------------------
एक array के अंदर दूसरा array।

<?php

$students = [
    ["Shalu", 20, "IT"],
    ["Riya", 21, "CS"],
    ["Neha", 20, "IT"]
];

echo $students[0][0]; // Shalu
echo $students[1][1]; // 21

?>

Array को loop से print करना
$fruits = ["Apple", "Mango", "Banana", "Orange"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
Important Array Functions
Function	काम
count()	Array में कितने elements हैं
sort()	Ascending order में sort
rsort()	Descending order में sort
array_push()	Element add करना
array_pop()	Last element remove
array_shift()	First element remove
array_unshift()	Beginning में element add
in_array()

ksort
arsort

max()
min()
range()
array_sum()
array_product()


file handling :

fopen()-> w -> write

r -> read
a -> append 

r+ -> read and write 
w+  -> read and write (purana data delete)
file_exists()->  file hai ya nhi ye check krta hai  
Folder ko bhi check krna hai 

include()-> include me common file ko rkhte h ya rendar krwate h 

require()

include_once() include_once ko many time call krne pr bhi sifr ek hi baar chalta h 

isset() function check krta hai form submit hua h ya nhi 




