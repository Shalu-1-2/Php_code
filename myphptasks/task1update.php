<?php if (!isset($_POST['update'])) {
    header("location:task1show.php");
    exit();
}
$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$email =$_POST['email'];
$conn = mysqli_connect("localhost", "root", "", "studentcrud");
if (!$conn) {
    echo "Database connection failed " . mysqli_connect_error();
}

$sel = "SELECT * FROM task1 WHERE id='$id'";

$query = mysqli_query($conn, $sel);

$data = mysqli_fetch_assoc($query);

$image = $data['image'];
$file = $data['file'];

if (!empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    if (file_exists("uploads/" . $data['image'])) {
        unlink("uploads/" . $data['image']);
    }
    move_uploaded_file($image_tmp, "uploads/" . $image);
}

if (!empty($_FILES['file']['name'])) {
    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if (file_exists("uploads/" . $data['file'])) {
        unlink("uploads/" . $data['file']);
    }
    move_uploaded_file($file_tmp, "uploads/" . $file);
}

$up = "UPDATE task1 SET name='$name', mobile='$mobile', gender='$gender', email='$email', image='$image', file='$file' WHERE id='$id'";
$q = mysqli_query($conn, $up);
if ($q) {
    echo "Data updated successfully";
} else {
    echo "Data not updated ";
}
