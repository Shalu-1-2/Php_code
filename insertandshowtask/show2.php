<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Student Data</h1>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Father Name</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Course</th>
            <th>City</th>
            <th>Address</th>
        </tr>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "phpcrud");
        $sel = "SELECT * FROM studentdata";


        $query = mysqli_query($conn, $sel);

        while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['fname'] ?></td>
                <td><?php echo $data['mobile'] ?></td>
                <td><?php echo $data['gender'] ?></td>
                <td><?php echo $data['course'] ?></td>
                <td><?php echo $data['city'] ?></td>
                <td><?php echo $data['address'] ?></td>
            </tr>

        <?php
        }

        ?>
    </table>
</body>

</html>