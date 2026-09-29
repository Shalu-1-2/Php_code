<?php

$conn = mysqli_connect("localhost", "root", "", "media_db");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$pdf = $_FILES['pdf']['name'];
$tmp_name = $_FILES['pdf']['tmp_name'];

if (move_uploaded_file($tmp_name, "uploads/" . $pdf)) {

    $query = "INSERT INTO pdf (pdf) VALUES ('$pdf')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "PDF Inserted Successfully";
    } else {
        echo "PDF Not Inserted";
    }

} else {
    echo "PDF Upload Failed";
}

?>