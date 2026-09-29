<?php
include("db.php");

if (!isset($_POST['next'])) {
    header("location0:form1.php");
    exit();
}
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];

if ($name == "" || $email == "" || $mobile == "" || $gender == "") {
    echo "All field are required";
} else {

    $ins = "INSERT INTO taskform(name,email,mobile,gender)VALUES('$name','$email','$mobile','$gender')";

    $query = mysqli_query($conn, $ins);
    if ($query) {
        $id =mysqli_insert_id($conn);
        echo " <script>
    alert('Step 1 Completed Successfully');
    window.location.href='form2.php?id=$id';
    </script>";
    } else {

        echo " <script>
    alert('Step 1 Completed failed');
    window.location.href='form1.php';
    </script>";
    }
}
