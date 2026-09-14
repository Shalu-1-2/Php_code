<?php

$studentName = "komal";
$course = "mern";

$data = "Name :- " . $studentName . "\n";
$data .= "Course :- " . $course . "\n\n";

$fileHandle = fopen("student1.txt", "a");

fwrite($fileHandle, $data);

fclose($fileHandle);

echo "File Created <br><br>";

$fileHandle = fopen("student1.txt", "r");

$content = fread($fileHandle, filesize("student1.txt"));

echo nl2br($content);

fclose($fileHandle);

?>