<?php

if (!isset($_POST['next'])) {
    header("location:step1.php");
    exit();
}

include("db.php");
$id = $_POST['id'];
$city = $_POST['city'];
$address = $_POST['address'];
$course = implode(",", $_POST['course']);

if ($city == "" || $address == "" || $course == "") {
    echo "All feilds are required";
}

$up = "UPDATE stepform SET city='$city',address ='$address',course='$course' WHERE id='$id'";
$query = mysqli_query($conn, $up);


if ($query) {
    echo "<script>
    alert('step 2 completed successfully');
    window.location.href='step3.php?id=$id';
    </script>";
}
else{
     echo "<script>
    alert('step 2 failed');
    window.location.href='step2.php';
    </script>";
}
