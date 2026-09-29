<?php
if (!isset($_POST["upload"])) {
  header('location:file2code.php');
  exit();
}


$filename = $_FILES["file"]["name"];
$filetemp = $_FILES["file"]["tmp_name"];

$conn = mysqli_connect("localhost", "root", "", "phpcrud");
if (!$conn) {
  echo "database connection failed " . mysqli_connect_error();
}

$ins = "INSERT INTO file1(file) VALUES('$filename')";
$query = mysqli_query($conn, $ins);
if ($query) {
  move_uploaded_file($filetemp, "../uploads/" . $filename);
  echo "File uploaded Successfully";
} else {
  echo "File Upload Failed" . mysqli_error($conn);
}