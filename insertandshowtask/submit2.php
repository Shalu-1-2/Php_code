<?php 

$name = $_POST['name']; 
$fname = $_POST['fname']; 
$gender = $_POST['gender']; 
$course = $_POST['course']; 
$city = $_POST['city']; 
$address = $_POST['address']; 

$conn = mysqli_connect("localhost", "root", "", "phpcrud"); 

if (!$conn) { 
    echo "Database connection failed"; 
} 

$ins = "INSERT INTO studentdata(name,fname,gender,course,city,address) 
        VALUES ('$name', '$fname', '$gender', '$course', '$city', '$address')"; 

$query = mysqli_query($conn, $ins); 

if ($query) { 
    echo "Data Saved Successfully"; 
} else { 
    echo "Data Not Saved"; 
} 

?>