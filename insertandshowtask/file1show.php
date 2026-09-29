<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Image</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "phpcrud");

        if (!$conn) {
            echo "Connection Failed" . mysqli_connect_error();
        }

        $sel = "SELECT * FROM file";

        $query = mysqli_query($conn, $sel);

        while ($data = mysqli_fetch_assoc($query)) {
        ?>

            <tr>
                <td><?php echo $data['id'] ?></td>
                <td>
                    <iframe src="../uploads/<?php echo $data['file']?>"></iframe>
            </td>
            </tr>

        <?php

        }

        ?>


    </table>
</body>

</html>