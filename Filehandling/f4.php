<?php

$file = fopen("student.txt","a");

fwrite($file,"\n Welcome to php \n");

fclose($file);

echo "file update";

?>