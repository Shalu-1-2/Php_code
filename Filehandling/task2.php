
<?php

$name = "Shalu";
$diaryNote = "Aaj maine PHP file handling padhi.";

$dateTime = date("d-m-Y h:i:s");

$data = "Name :- " . $name . "\n";
$data .= "Date & Time :- " . $dateTime . "\n";
$data .= "Diary Note :- " . $diaryNote . "\n\n";

$fileHandle = fopen("diary.txt", "a");

fwrite($fileHandle, $data);

fclose($fileHandle);

echo "Diary Saved <br><br>";

$fileHandle = fopen("diary.txt", "r");

$content = fread($fileHandle, filesize("diary.txt"));

echo nl2br($content);

fclose($fileHandle);


// $fileHandle = fopen("diary.txt", "w");

// fclose($fileHandle);

// echo "All diary data deleted";

?>

