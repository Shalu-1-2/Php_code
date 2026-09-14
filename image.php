<?php

if (!isset($_POST["upload"])) {
    header('location:image.php');
    exit();
}

$filename = $_FILES["file"]["name"];
$filetmpname = $_FILES["file"]["tmp_name"];

$conn = mysqli_connect("localhost", "root", "", "phpcrud");

if (!$conn) {
    echo "database connection failed " . mysqli_connect_errno();
}

$ins = "INSERT INTO file(file) VALUES('$filename')";

$query = mysqli_query($conn, $ins);

if ($query) {
    move_uploaded_file($filetmpname, "uploads/" . $filename);
    echo "File Uploaded successfully !";
} else {
    echo "File Upload failed " . mysqli_error($conn);
}
?>