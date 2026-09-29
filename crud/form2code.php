<?php

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$gender = $_POST["gender"];
$course = implode(",", $_POST["course"]);
$city = $_POST["city"];
$address = $_POST["address"];


$conn = mysqli_connect("localhost", "root", "", "studentcrud");
if (!$conn) {
    echo "Database Connection failed";
}
$ins = "INSERT INTO form2(name,mobile,gender,course,city,address)
VALUES('$name','$mobile','$gender','$course','$city','$address')";

$query = mysqli_query($conn, $ins);

if ($query) {

    echo "Data saved successfully";
} else {
    echo "Data not save";
}
