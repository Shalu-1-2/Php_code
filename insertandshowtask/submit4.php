<?php

  $name =$_POST['name'];
  $email =$_POST['email'];
  $gender =$_POST['gender'];
  $mobile=$_POST['mobile'];
  $service =$_POST['service'];

  $city= $_POST['city'];
  $address =$_POST['address'];

  $image =$_FILES['file']['name'];
  $imagetmpname =$_FILES['file']['tmp_name'];

  $conn= mysqli_connect("localhost","root","","phpcrud");

  if(!$conn){
    echo "Database connection failed";
  }

  $ins = "INSERT INTO customer (name,email,gender,mobile,service,city,address,image)
   VALUES ('$name','$email','$gender','$mobile','$service','$city','$address','$image')";
    $query= mysqli_query($conn,$ins);

    if($query){
        move_uploaded_file("$imagetmpname","uploads/".$image);
        echo "file uploaded successfully and data store successfully";

    }
    else{
    echo "file not uploaded";
    }


?>