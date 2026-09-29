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
            <h1>data show</h1>
            <th>id</th>
            <th>name</th>
            <th>mobile</th>
            <th>Edit</th>
        </tr>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "studentcrud");
        if (! $conn) {
            echo "Database Connection failed" . mysqli_connect_error();
        }

        $sel = "SELECT * FROM form1";

        $query = mysqli_query($conn, $sel);

        while ($data = mysqli_fetch_assoc($query)) {

        ?>

            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['mobile'] ?></td>
                <td><a href="form1edit.php?id=<?php echo $data['id'] ?>">Edit</a></td>
            </tr>
        <?php
        }

        ?>
    </table>
</body>

</html>