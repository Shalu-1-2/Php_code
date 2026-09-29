<?php

$conn = mysqli_connect("localhost", "root", "", "media_db");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM pdf";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Show PDFs</title>
</head>

<body>

    <h2>Uploaded PDFs show</h2>

    <table border="1">

        <tr>
            <th>Id</th>
            <th>PDF</th>
        </tr>
        <?php

        while ($row = mysqli_fetch_assoc($result)) {

        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td>
                    <a href="uploads/<?php echo $row['pdf']; ?>" target="_blank">
                        <?php echo $row['pdf']; ?>
                    </a>
                </td>
            </tr>
        <?php

        }

        ?>

    </table>


</body>

</html>