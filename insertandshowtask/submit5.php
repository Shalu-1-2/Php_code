<?php
  $name =$_POST['name'];
  $email =$_POST['email'];
  $gender =$_POST['gender'];
  $mobile=$_POST['mobile'];
  $subject =$_POST['subject'];
  $experience =$_POST['experience'];
  $city= $_POST['city'];
  $address =$_POST['address'];

  $conn= mysqli_connect("localhost","root","","phpcrud");

  if(!$conn){
    echo "Database connection failed";
  }
   
  $ins ="INSERT INTO teacher(name,email,gender,mobile,subject,experience,city,address)
  VALUES('$name','$email','$gender','$mobile', '$subject','$experience','$city','$address')";

 $query=mysqli_query($conn,$ins);

 if($query){
    echo "Data Save Successfully ";

 }
 else{
    echo "Data is not store successfully";
 }

?>