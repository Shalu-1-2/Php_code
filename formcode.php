<?php

$name =$_POST['name'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$dob =$_POST['dob'];


// echo "Name :- $name <br>";
// echo "Email :- $email <br>";
// echo "Mobile :- $mobile <br>";
// echo "DOB :- $dob <br>";
// $servename= "localhost";
// $username="root";
// $password = "";
// $dbname = "phpcrud";

// $conn=mysqli_connect($servename,$username,$password,$dbname);


$conn = mysqli_connect("localhost","root","","phpcrud");
if(! $conn){
    echo "Database connection failed";
}

$ins ="INSERT INTO form1(name,email,mobile,dob) VALUES('$name','$email','$mobile', '$dob')";

$query = mysqli_query($conn,$ins);

if($query){
    echo "Data saved Successfully";
}
else{
    echo "Data is not saved ";
}
?>