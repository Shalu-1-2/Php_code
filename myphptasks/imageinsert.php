<?php

$conn = mysqli_connect("localhost", "root", "", "media_db");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, "uploads/" . $image);

$query = "INSERT INTO images (image) VALUES ('$image')";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "Image Inserted Successfully";
} else {
    echo "Image Not Inserted";
}

?>