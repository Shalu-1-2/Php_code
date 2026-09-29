<?php

include("db.php");

if(isset($_REQUEST['next'])){
    header("location:alldatashowform.php");
    exit();

}


$sel = "SELECT * FROM stepform";

$query = mysqli_query($conn, $sel);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>

<body>

    <h1>All Student Data</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>City</th>
            <th>Address</th>
            <th>Course</th>
            <th>Profile</th>
            <th>Signature</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($query)) {

        ?>

            <tr>

                <td><?php echo $row['id']; ?></td>

                <td><?php echo $row['name']; ?></td>

                <td><?php echo $row['email']; ?></td>

                <td><?php echo $row['mobile']; ?></td>

                <td><?php echo $row['gender']; ?></td>

                <td><?php echo $row['city']; ?></td>

                <td><?php echo $row['address']; ?></td>

                <td><?php echo $row['course']; ?></td>

                <td>
                    <img src="profile/<?php echo $row['profile']; ?>" width="80">
                </td>

                <td>
                    <img src="signature/<?php echo $row['signature']; ?>" width="80">
                </td>

                <td>
                    <a href="stepformedit.php?id=<?php echo $row['id']; ?>">
                        Edit
                    </a>
                </td>

                <td>
                    <a href="stepformdelete.php?id=<?php echo $row['id']; ?>">
                        Delete
                    </a>
                </td>

            </tr>

        <?php

        }

        ?>

    </table>

</body>

</html>