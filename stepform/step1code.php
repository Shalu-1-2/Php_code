<?php

if (!isset($_POST['next'])) {
    header("location:step1.php");
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
include("db.php");

if ($name == "" || $email == "" || $mobile == "" || $gender == "") {
    echo "All field are required";
} else {

    $ins = "INSERT INTO stepform(name, email, mobile, gender)
 VALUES('$name','$email','$mobile','$gender')";
    $query = mysqli_query($conn, $ins);

    if ($query) {
        $id = mysqli_insert_id($conn);
        echo "<script>
     alert('Step 1 Completed Successfully');
     window.location.href='step2.php?id=$id';
    </script>";
    } else {
        echo "<script>
     alert('Step 1 Completed Failed');
     window.location.href='step1.php';
    </script>";
    }
}
