<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>My Form</h1>
    <table border="1">
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Profile</th>
            <th>Resume</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "studentcrud");
        $sel = "SELECT * FROM task1";
        $query = mysqli_query($conn, $sel);
        $i = 1;
        while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['mobile'] ?></td>
                <td><?php echo $data['gender'] ?></td>

                <td><img src="uploads/<?php echo $data['image'] ?>" width="200"></td>
                <td>
                    <iframe src="uploads/<?php echo $data['file'] ?>" frameborder="0" width="300px" height="300px">
                        <?php echo $data['file'] ?>

                    </iframe>


                </td>
                <td><a href="task1edit.php?id=<?php echo $data['id'] ?>">Edit</a></td>
                <td><a href="task1edit.php?id=<?php echo $data['id'] ?>">Delete</a></td>
            </tr>
        <?php

        }
        ?>

    </table>

</body>

</html>