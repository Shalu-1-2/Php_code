<?php

include("db.php");
if (!isset($_REQUEST['id'])) {
    header("location:step1.php");
    exit();
}


$id = $_REQUEST['id'];
$sel = "SELECT *FROM stepform where id='$id'";
$query = mysqli_query($conn, $sel);
$row = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Step 2 -Education Details</h1>
    <form action="step2code.php" method="post">
        <input type="hidden" name="id" value="<?php echo  $row['id'] ?>">
        city:
        <select name="city">
            <option value="" readonly disabled>--Select city---</option>
            <option value="Kanpur"
                <?php
                if ($row['city'] == 'Kanpur') {
                    echo "selected";
                }
                ?>>Kanpur</option>
            <option value="Lucknow"
                <?php
                if ($row['city'] == 'Lucknow') {
                    echo "selected";
                }
                ?>>Lucknow</option>
            <option value="Prayagraj"
                <?php
                if ($row['city'] == 'Prayagraj') {
                    echo "selected";
                }
                ?>>Prayagraj</option>
            <option value="Sultanpur"
                <?php
                if ($row['city'] == 'Sultanpur') {
                    echo "selected";
                }
                ?>>Sultanpur</option>
        </select>
        <br> <br>
        Address : <textarea name="address" ><?php echo $row['address'] ?></textarea> <br> <br>
        <?php $courses = explode(",", $row['course']) ?>
        Course:
        <input type="checkbox" name="course[]" value="PHP"
            <?php
            foreach ($courses as $course) {
                if ($course == 'PHP') {
                    echo "checked";
                }
            }
            ?>>PHP
        <input type="checkbox" name="course[]" value="Java"
            <?php
            foreach($courses as $course) {
                if($course == 'Java') {
                    echo "checked";
                }
            }
            ?>>Java
        <input type="checkbox" name="course[]" value="Python"

            <?php
            foreach($courses as $course) {
                if($course == 'Python') {
                    echo "checked";
                }
            }
            ?>> Python
        <input type="checkbox" name="course[]" value="MERN"
            <?php
            foreach($courses as $course) {
                if($course == 'MERN') {
                    echo "checked";
                }
            }
            ?>>MERN <br><br>
        <a href="step1edit.php?id=<?php echo $row['id'] ?>">Previous</a>
        <button name="next">Next</button>
    </form>
</body>

</html>