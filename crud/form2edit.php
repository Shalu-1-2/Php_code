<?php
if (!isset($_REQUEST['id'])) {
    header("location:form2show.php");
    exit();
}

$id = $_REQUEST['id'];

$conn = mysqli_connect("localhost", "root", "", "studentcrud");
if (!$conn) {
    echo "Database connection  failed" . mysqli_connect_error();
}

$sel = "SELECT * FROM form2 WHERE id='$id'";
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
    <h1>student form</h1>
    <form action="form2update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        Name : <input type="text" name="name" value="<?php echo $data['name'] ?>"> <br><br>
        Mobile : <input type="number" name="mobile" value="<?php echo $data['mobile'] ?>"> <br><br>
        Gender : <input type="radio" value="male" name="gender"

            <?php
            if ($data['gender'] == 'male') {
                echo "checked";
            }
            ?>> male
        <input type="radio" value="female" name="gender"
            <?php
            if ($data['gender'] == 'female') {
                echo "checked";
            }
            ?>> female <br><br>

        <?php
        $courses = explode(",", $data['course']);
        ?>
        Course : <input type="checkbox" value="PHP" name="course[]"
            <?php

            foreach ($courses as $course) {
                if ($course == 'PHP') {
                    echo "checked";
                }
            }
            ?>> PHP
        <input type="checkbox" value="Java" name="course[]"
            <?php foreach ($courses as $course) {
                if ($course == "Java") {
                    echo "checked";
                }
            } ?>>Java
        <input type="checkbox" value="Python" name="course[]"
            <?php foreach ($courses as $course) {
                if ($course == "Python") {
                    echo "checked";
                }
            } ?>> Python
        <input type="checkbox" value="MERN" name="course[]"
            <?php foreach ($courses as $course) {
                if ($course == "MERN") {
                    echo "checked";
                }
            } ?>> MERN
        <br><br>
        City : <select name="city">
            <option value="Lucknow"
                <?php
                if ($data['city'] == 'Lucknow') {
                    echo "selected";
                }
                ?>>Lucknow</option>

            <option value="Kanpur"
                <?php
                if ($data['city'] == 'Kanpur') {
                    echo "selected";
                }
                ?>>Kanpur</option>
            <option value="Prayagraj"
                <?php
                if ($data['city'] == 'Prayagraj') {
                    echo "selected";
                }
                ?>>Prayagraj</option>
            <option value="Gorakhpur"
                <?php
                if ($data['city'] == 'Gorakhpur') {
                    echo "selected";
                }
                ?>>Gorakhpur</option>
        </select> <br><br>
        Address : <textarea name="address"><?php echo $data['address'] ?></textarea> <br><br>
        <button name="update">Update</button>
    </form>
</body>

</html>