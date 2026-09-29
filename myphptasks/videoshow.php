<?php

$conn = mysqli_connect("localhost", "root", "", "media_db");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM videos";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Show Videos</title>
</head>

<body>

    <h2>Uploaded Videos show</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>video</th>
        </tr>
        <?php

        while ($row = mysqli_fetch_assoc($result)) {

        ?>

            <tr>
                <td>
                    <?php echo $row['id']; ?>
                </td>
                <td>
                    <video width="400" controls>
                        <source src="uploads/<?php echo $row['video']; ?>">
                    </video>
                </td>
            </tr>
        <?php

        }

        ?>
    </table>



</body>

</html>