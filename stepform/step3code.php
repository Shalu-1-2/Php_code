<?php

include("db.php");
if (!isset($_POST['submit'])) {
    header("location:step1.php");
    exit();
}
$id = $_POST['id'];
$profilename = $_FILES['profile']['name'];
$profiletmpname = $_FILES['profile']['tmp_name'];

$sign = $_FILES['sign']['name'];
$signtmpname = $_FILES['sign']['tmp_name'];

if ($profilename == "" || $sign == "") {
    echo "All Feilds are requireed";
}

$up = "UPDATE stepform SET profile='$profilename', signature='$sign'  WHERE id='$id'";

$query = mysqli_query($conn, $up);

move_uploaded_file($profiletmpname,"profile/" . $profilename);
move_uploaded_file($signtmpname,"signature/" . $sign);

if ($query) {
    echo "<script>
    alert('Form submitted Successfully');
    window.location.href='showform.php?id=$id';
    </script>";
} else {
    echo "<script>
    alert('Form submision failed');
    window.location.href='step3.php';
    </script>";
}
