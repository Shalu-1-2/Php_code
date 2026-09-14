<?php

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$course = implode(",",$_POST["course"]);
$city = $_POST['city'];
$address = $_POST['address'];


$conn = mysqli_connect("localhost","root","","phpcrud");
if(!$conn){
    echo"Database Connection Failed";
}
$ins = "INSERT INTO studentdata(name,mobile,gender,course,city,address)
VALUES('$name','$mobile','$gender','$course','$city','$address')";

$query = mysqli_query($conn,$ins);

if($query){
  echo "Data Saved Suceessfully";
}
else{

echo "Data Not Saved";

}
?>