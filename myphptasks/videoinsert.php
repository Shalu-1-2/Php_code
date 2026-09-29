<?php

$conn = mysqli_connect("localhost", "root", "", "media_db");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$video = $_FILES['video']['name'];
$tmp_name = $_FILES['video']['tmp_name'];

if (move_uploaded_file($tmp_name, "uploads/" . $video)) {

    $query = "INSERT INTO videos (video) VALUES ('$video')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Video Inserted Successfully";
    } else {
        echo "Video Not Inserted";
    }

} else {
    echo "Video Upload Failed";
}

?>