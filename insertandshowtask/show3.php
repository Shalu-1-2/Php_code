<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Employee Data</h1>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Department</th>
            <th>City</th>
            <th>Address</th>
            <th>File</th>
        </tr>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "phpcrud");
        $sel = "SELECT * FROM employee";


        $query = mysqli_query($conn, $sel);

        while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['mobile'] ?></td>
                <td><?php echo $data['gender'] ?></td>
                <td><?php echo $data['department'] ?></td>
                <td><?php echo $data['city'] ?></td>
                <td><?php echo $data['address'] ?></td>
                <td><?php echo $data['image'] ?></td>
            </tr>

        <?php
        }

        ?>
    </table>
</body>

</html>