<?php

 $file =fopen("student.txt","r");

 echo fread($file, filesize("student.txt"));

 fclose($file);

?>