<?php

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$city = $_POST['city'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$image = $_FILES['file']['name'];
$imagetmpname = $_FILES['file']['tmp_name'];

$conn = mysqli_connect("localhost", "root", "", "phpcrud");

if (!$conn) {
  echo "Database connection failed";
}

$ins = "INSERT INTO employee(name,email,gender,department,city,address,mobile ,image) 
        VALUES ('$name', '$email', '$gender', '$department', '$city', '$address' ,'$mobile' ,'$image')";

$query = mysqli_query($conn, $ins);
if ($query) {
  move_uploaded_file("$imagetmpname", "uploads/" . $image);
  echo "file uploaded successfully and data store successfully";
} else {
  echo "file not uploaded";
} 
