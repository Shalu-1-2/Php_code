
<?php

$student=["shalu","yash","abhishek"];


array_pop($student);
print_r($student);
echo "<br>";
array_push($student,"shalini");
print_r($student);
echo "<br>";

array_unshift($student,"radhika");
print_r($student);
echo "<br>";

array_shift($student);
print_r($student);

?>