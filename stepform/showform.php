<?php

include("db.php");

if (!isset($_REQUEST['id'])) {
    header("location:step1.php");
    exit();
}
$id = $_REQUEST['id'];
$sel = "SELECT *FROM stepform WHERE id='$id'";

$query = mysqli_query($conn, $sel);
$data = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="center"> Show Details </h1>
    <center>
        <table border="1" cellpadding="5" cellspacing="0" style="width: 600px;">


            <tr>
                <th>id</th>
                <td><?php echo $data['id'] ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $data['name'] ?></td>

            </tr>

            <tr>
                <th>Email</th>
                <td><?php echo $data['email'] ?></td>

            </tr>
            <tr>
                <th>mobile</th>
                <td><?php echo $data['mobile'] ?></td>

            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $data['gender'] ?></td>

            </tr>
            <tr>
                <th>city</th>
                <td><?php echo $data['city'] ?></td>

            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $data['address'] ?></td>

            </tr>
            <tr>
                <th>Course</th>
                <td><?php echo $data['course'] ?></td>

            </tr>
            <tr>
                <th>profile</th>
                <td><img src="profile/<?php echo $data['profile'] ?>" width="200"></td>

            </tr>
            <tr>
                <th>Signature</th>
                <td><img src="signature/<?php echo $data['signature'] ?>" width="200"></td>

            </tr>

            <tr>
                <th>Edit</th>
                <td><a href="stepformedit.php?id=<?php echo $data['id'] ?>">Edit</a></td>
                <!-- <td><a href="stepformdelete.php?id=<?php echo $data['id'] ?>"
                        onclick="return confirm('Are you want to delete this row ?')">Delete</a></td> -->
            </tr>
        </table>
    </center>
</body>

</html>