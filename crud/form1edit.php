<?php

if (!isset($_REQUEST['id'])) {
    header("location:form1show.php");
}

$id = $_REQUEST['id'];


$conn = mysqli_connect("localhost", "root", "", "studentcrud");
if (!$conn) {
    echo "database connection  failed" . mysqli_connect_error();
}
$sel = "SELECT * FROM form1 WHERE id='$id'";

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

    <h1> Update Form</h1>
    <form action="form1update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        Update name: <input type="text" name="name" value="<?php echo $data['name']  ?>" /> <br><br>
        Update number: <input type="number" name="mobile" value="<?php echo $data['mobile']  ?>" /> <br><br>
        <button name="update">Update</button>
    </form>

</body>

</html>