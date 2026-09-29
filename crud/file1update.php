<?php

if (!isset($_POST['update'])) {
    header("location:file1show.php");
    exit();
}

$id = $_POST['id'];
$name = $_POST['name'];

$conn = mysqli_connect("localhost", "root", "", "studentcrud");
if (!$conn) {
    echo "Database connection failed" . mysqli_connect_error();
}

$sel = "SELECT * FROM file1 WHERE id ='$id'";
$query = mysqli_query($conn, $sel);
$row = mysqli_fetch_assoc($query);

// if($_FILES['file']['name']!=""){

if (!empty($_FILES['file']['name'])) {
    $filename = $_FILES['file']['name'];
    $filetmpname = $_FILES['file']['tmp_name'];

    if (file_exists("uploads/" . $row['file'])) {
        unlink("uploads/" . $row['file']);
    }

    $up = "UPDATE file1 SET name='$name',file='$filename' WHERE id='$id'";

    $q = mysqli_query($conn, $up);
    move_uploaded_file($filetmpname, "uploads/" . $filename);
    if ($q) {
        echo "Data update with file";
    } else {
        echo "Data not update with file ";
    }
} else {
    $up1 = "UPDATE file SET name='name' WHERE id='$id'";
    $q1 = mysqli_query($conn, $up1);
    if ($q1) {
        echo "Data update without file";
    } else {
        echo "Data not update without file";
    }
}
