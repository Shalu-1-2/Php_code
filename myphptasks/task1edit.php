<?php
if (!isset($_REQUEST['id'])) {
    header("location:task1show.php");
    exit();
}

$id = $_REQUEST['id'];

$conn = mysqli_connect("localhost", "root", "", "studentcrud");
if (!$conn) {
    echo "Database connection  failed" . mysqli_connect_error();
}

$sel = "SELECT * FROM task1 WHERE id='$id'";
$query = mysqli_query($conn, $sel);
$data = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>My Form</h1>
    <form action="task1update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        Name: <input type="text" name="name" value="<?php echo $data['name'] ?>"> <br><br>
        Number: <input type="number" name="mobile" value="<?php echo $data['mobile'] ?>"> <br><br>
        Email: <input type="email" name="email" value="<?php echo $data['email'] ?>"> <br><br>

        Gender: <input type="radio" value="male" name="gender"
            <?php
            if ($data['gender'] == 'male') {
                echo "checked";
            }
            ?>>
        Male
        <input type="radio" value="female" name="gender"
            <?php
            if ($data['gender'] == 'female') {
                echo "checked";
            }
            ?>>
        Female <br><br>
        <img src="uploads/<?php echo $data['image'] ?>" alt="" width="300">
        Profile Image: <input type="file" name="image"> <br><br>


        <iframe src="uploads/<?php echo $data['file'] ?>" frameborder="0">
            <?php echo $data['file'] ?>
        </iframe>
        Resume: <input type="file" name="file"> <br><br>
        <button name="update">update</button>
    </form>
</body>

</html>