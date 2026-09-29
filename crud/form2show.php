<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>form 2 data</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr><th>S.N</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Course</th>
            <th>City</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "studentcrud");
        $sel = "SELECT * FROM form2";
        $query = mysqli_query($conn, $sel);
        $i =1;
        while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr> 
                <td><?php echo $i++ ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['gender'] ?></td>
                <td><?php echo $data['mobile'] ?></td>
                <td><?php echo $data['course'] ?></td>
                <td><?php echo $data['city'] ?></td>
                <td><?php echo $data['address'] ?></td>
                <td><a href="form2edit.php?id=<?php echo $data['id'] ?>">Edit</a></td>
                <td><a href="form2delete.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Are you sure want to delete data !') ">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>