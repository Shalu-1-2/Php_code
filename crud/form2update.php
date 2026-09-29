<?php
if (! isset($_POST['update'])) {
    header("location:form2show.php");
    exit();
}

$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];

$course = implode(",", $_POST['course']);
$city = $_POST['city'];
$address = $_POST['address'];

$conn = mysqli_connect("localhost", "root", "", "studentcrud");

if (! $conn) {
    echo "database connection failed" . mysqli_connect_error();
}

$up = "UPDATE form2 SET name='$name', mobile='$mobile', gender ='$gender' ,course ='$course' ,
 city='$city', address ='$address'  WHERE id='$id' ";
$query = mysqli_query($conn, $up);
if ($query) {
    // echo "data updated successfully !";
    echo "<script>
           alert('data update successfully');
           window.location.href = 'form2show.php';
    </script>";
} else {
    echo "<script>
           alert('data not update');
           window.location.href = 'form2edit.php';
    </script>";
}
