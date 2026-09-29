<?php

$conn = mysqli_connect("localhost", "root", "", "media_db");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM images";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Show Images </title>
</head>

<body>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Image</th>
        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {

        ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><img src="uploads/<?php echo $row['image']; ?>" width="300">
                </td>
                
            </tr>

        <?php

        }

        ?>
    </table>



</body>

</html>