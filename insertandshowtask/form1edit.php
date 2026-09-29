<?php
if (!isset($_REQUEST['msg'])) {
    header('location:form1show.php');
    exit();
}

$id = $_REQUEST['msg'];

$conn = mysqli_connect("localhost", "root", "", "phpcrud");
if (!$conn) {
    echo "database connection failed" . mysqli_connect_error();
}

$sel = "SELECT * FROM  emp where id='$id'";
$query  = mysqli_query($conn, $sel);

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
    <h1>Update form</h1>
    <form action="form1update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        Update Name : <input type="text" name="name" value="<?php echo $data['name'] ?>"><br><br>
        Update EMail : <input type="email" name="email" value="<?php echo $data['email'] ?> "><br> <br>
        Update Mobile : <input type="number" name="mobile" value="<?php echo $data['mobile'] ?>"> <br> <br>
        Update Dob : <input type="date" name="dob" value="<?php echo $data['dob'] ?>"><br> <br>
        <button name="update">Submit</button>

    </form>
</body>

</html>