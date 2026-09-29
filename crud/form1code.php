<?php

if (! isset($_POST['save'])) {
    header("location:form1.php");
    exit();
}

$name = $_POST['name'];
$mobile = $_POST['mobile'];

$conn = mysqli_connect("localhost", "root", "", "studentcrud");
if (!$conn) {
    echo "database connection  failed". mysqli_connect_error();
}

$ins = "INSERT INTO form1(name,mobile) VALUES('$name','$mobile')";
$query = mysqli_query($conn,$ins);
if ($query) {
    echo "data saved";
} else {
   echo  "data not saved " . mysqli_error($conn);
}

