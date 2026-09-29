<?php

include("db.php");

if (!isset($_REQUEST['id'])) {
    header("Location:form1.php");
    exit();
}

$id = $_REQUEST['id'];

$sel = "SELECT * FROM taskform WHERE id='$id'";
$query = mysqli_query($conn,$sel);

$row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Details</title>
</head>

<body>

    <h1>Education Details</h1>

    <form action="form2code.php" method="post">

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        City:
        <select name="city">
            <option value="" readonly disabled>--Select city--</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Prayagraj">Prayagraj</option>
            <option value="Sultanpur">Sultanpur</option>
        </select>

        <br><br>

        Address:
        <textarea name="address"></textarea>

        <br><br>

        Course:
        <input type="checkbox" name="course[]" value="PHP"> PHP
        <input type="checkbox" name="course[]" value="Java"> Java
        <input type="checkbox" name="course[]" value="Python"> Python
        <input type="checkbox" name="course[]" value="MERN"> MERN

        <br><br>

        <a href="form1edit.php?id=<?php echo $row['id']; ?>">Previous</a>

        <button type="submit" name="next">Next</button>

    </form>

</body>

</html>