<?php
if (!isset($_POST['upload'])) {
    header("location:file1.php");
    exit();
}

$name = $_POST['name'];
$filename = $_FILES['file']['name'];
$filetmpname = $_FILES['file']['tmp_name'];

$conn = mysqli_connect("localhost", "root", "", "studentcrud");

if (!$conn) {

    echo "Database connection faild" . mysqli_connect_error();
}

$ins = "INSERT INTO file1 (name,file) VALUES ('$name','$filename')";

$query = mysqli_query($conn, $ins);

move_uploaded_file($filetmpname, "uploads/" . $filename);

if ($query) {
    echo "data saved successfully";
} else {
    echo "data not saved";
}
