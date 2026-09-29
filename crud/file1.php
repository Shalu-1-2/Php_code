<?php
if (isset($_POST['upload'])) {

    $name = $_POST['name'];
    $filename = $_FILES['file']['name'];
    $filetmpname = $_FILES['file']['tmp_name'];

    $conn = mysqli_connect("localhost", "root", "", "studentcrud");

    if (!$conn) {

        echo "Database connection faild" . mysqli_connect_error();
    }

    $ins = "INSERT INTO file1 (name,file) VALUES ('$name','$filename')";

    $query = mysqli_query($conn, $ins);

    move_uploaded_file($filetmpname, "uploads/" . $filename);

    if ($query) {
        echo "data saved successfully";
    } else {
        echo "data not saved";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>fill upload</h1>
    <form method="post" enctype="multipart/form-data">
        Name : <input type="text" name="name" /> <br><br>
        File Upload:
        <input type="file" name="file" /> <br><br>
        <button name="upload">upload</button>
    </form>
</body>

</html>