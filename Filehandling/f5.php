<?php

// $file = fopen("student.txt","r+");
$file = fopen("student.txt","w+");
fwrite($file,"New data");
fclose($file);

echo "Hello"
?>