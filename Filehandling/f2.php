<?php


$file  = fopen("student.txt","w");

fwrite($file,"Hello world \n my page");

fclose($file);

echo "file handling";
?>
