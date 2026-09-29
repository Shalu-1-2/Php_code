<?php

if (isset($_FILES['image'])) {

    echo "<pre>
  print_r($_FILES);
 </pre>";


    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    if (move_uploaded_file($file_tmp, "uploaded-images/" . $file_name)) {
        echo "Successfully uploaded";
    } else {
        echo "Could not uploaded the file.";
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
    <form method="post" enctype="multipart/form-data">
        File:
        <input type="file" name="image"> <br><br>
        <button name="submit">submit</button>
    </form>
</body>

</html>