<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form 1 Data</h1>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>DOB</th>
            <th>password</th>
        </tr>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "phpcrud");
        $sel = "SELECT * FROM emp";


        $query = mysqli_query($conn, $sel);

        while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['mobile'] ?></td>
                <td><?php echo $data['dob'] ?></td>
                <td><?php echo $data['password'] ?></td>
            </tr>

        <?php
        }

        ?>
    </table>
</body>

</html>