<?php if (!isset($_POST['save'])) {
    header("location:task1.php");
    exit();
}
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$file = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$conn = mysqli_connect("localhost", "root", "", "studentcrud");
if (!$conn) {
    die("Database connection failed " . mysqli_connect_error());
}


$ins = "INSERT INTO task1(name, mobile,email, gender, image, file) VALUES('$name', '$mobile','$email', '$gender', '$image', '$file')";
$query = mysqli_query($conn, $ins);
move_uploaded_file($image_tmp, "uploads/" . $image);
move_uploaded_file($file_tmp, "uploads/" . $file);
if ($query) {
    echo "Data saved successfully";
} else {
    echo "Data not saved " . mysqli_error($conn);
}
