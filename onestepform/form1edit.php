<?php

include("db.php");
if (!isset($_REQUEST['id'])) {
    header("location:form1.php");
    exit();
}

$id = $_REQUEST['id'];
$sel = "SELECT *FROM taskform where id='$id'";
$query = mysqli_query($conn, $sel);

$row = mysqli_fetch_assoc($query);

if (isset($_POST['next'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    $up = "UPDATE taskform SET name='$name',email='$email',mobile='$mobile',gender='$gender' WHERE id='$id'";
    $query = mysqli_query($conn, $up);
    if ($query) {
        header("location:form2.php?id=$id");
    } else {
        echo "Data not updated";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
</head>

<body>

    <h1>Personal Information</h1>

    <form method="post">

        Name:
        <input type="text" name="name" value="<?php echo $row['name'] ?>">
        <br><br>

        Email:
        <input type="email" name="email" value="<?php echo $row['email'] ?>">
        <br><br>

        Mobile:
        <input type="number" name="mobile" value="<?php echo $row['mobile'] ?>">
        <br><br>

        Gender:
        <input type="radio" value="Male" name="gender"
            <?php
            if ($row['gender']=='Male') {
                echo "checked";
            }
            ?>
        > Male
        <input type="radio" value="Female" name="gender"
            <?php
            if ($row['gender']=='Female') {
                echo "checked";
            }
            ?>
        > Female

        <br><br>

        <button type="submit" name="next">Next</button>

    </form>

</body>

</html>