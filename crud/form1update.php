<?php

if (! isset($_POST['update'])) {
    header("location:form1show.php");
    exit();
}

$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];

$conn = mysqli_connect("localhost", "root", "", "studentcrud");

if (! $conn) {

    echo  "Database Connection Failed " . mysqli_connect_error();
}

$up = " UPDATE form1 SET name='$name', mobile='$mobile' WHERE id='$id'";

$query = mysqli_query($conn, $up);

if ($query) {
    echo "Data update successfully !";
} else {
    echo "Data not update " . mysqli_error($conn);
}
