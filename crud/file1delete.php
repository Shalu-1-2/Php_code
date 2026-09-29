<?php

if (!isset($_REQUEST['id'])) {
    header("location:file1show.php");
    exit();
}

$id = $_REQUEST['id'];

$conn = mysqli_connect("localhost", "root", "", "studentcrud");

if (! $conn) {
    echo "Database Connection failed" . mysqli_connect_error();
}


$sel = "SELECT * FROM file1 WHERE id='$id' ";
$query = mysqli_query($conn,$sel);
$row = mysqli_fetch_assoc($query);

if(file_exists("uploads/" . $row['file'])) {
    unlink("uploads/" .$row['file']);
}
$del = "DELETE FROM file1 WHERE id='$id'";
$query1 = mysqli_query($conn, $del);

if ($query1) {
    echo "Data deleted Successfully";
} else {
    echo "Data not delete ";
}
