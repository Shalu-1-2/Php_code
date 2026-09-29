<?php

$name =$_POST['name'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$dob =$_POST['dob'];
$password=$_POST['password'];


$conn = mysqli_connect("localhost","root","","phpcrud");
if(! $conn){
    echo "Database connection failed";
}

$ins ="INSERT INTO emp(name,email,mobile,dob,password) VALUES('$name','$email','$mobile', '$dob','$password')";

$query = mysqli_query($conn,$ins);

if($query){
    echo "Data saved Successfully";
}
else{
    echo "Data is not saved ";
}
?>