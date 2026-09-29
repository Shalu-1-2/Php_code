<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data show file</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>File</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php

        $conn = mysqli_connect("localhost", "root", "", "studentcrud");

        if (!$conn) {

            echo "Database connection faild" . mysqli_connect_error();
        }


        $sel = "SELECT * FROM file1";
        $query = mysqli_query($conn, $sel);
        while ($row = mysqli_fetch_assoc($query)) {
        ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><img src="uploads/<?php echo $row['file'] ?>" width="200"></td>
                <td><a href="file1edit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
                <td><a href="file1delete.php?id=<?php echo $row['id'] ?>" 
                onclick="return confirm('Are you want to delete this row ?')">Delete</a></td>

            </tr>

        <?php
        }
        ?>


    </table>
</body>

</html>