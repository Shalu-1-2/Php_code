<?php
include("db.php");

if (!isset($_REQUEST['id'])) {
    header("location:showform.php");
    exit();
}

$id = $_REQUEST['id'];

$sel = "SELECT * FROM stepform WHERE id='$id'";
$query = mysqli_query($conn, $sel);
$row = mysqli_fetch_assoc($query);

if (isset($_POST['next'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $course = implode(",", $_POST['course']);

    if (!empty($_FILES['profile']['name'])) {

        $profilename = $_FILES['profile']['name'];
        $profiletmpname = $_FILES['profile']['tmp_name'];

        $sign = $_FILES['sign']['name'];
        $signtmpname = $_FILES['sign']['tmp_name'];

        if (file_exists("profile/" . $row['profile'])) {
            unlink("profile/" . $row['profile']);
        }

        if (file_exists("signature/" . $row['signature'])) {
            unlink("signature/" . $row['signature']);
        }

        $up = "UPDATE stepform SET 
        name='$name',
        email='$email',
        mobile='$mobile',
        gender='$gender',
        city='$city',
        address='$address',
        course='$course',
        profile='$profilename',
        signature='$sign'
        WHERE id='$id'";

        $query = mysqli_query($conn, $up);

        move_uploaded_file($profiletmpname, "profile/" . $profilename);
        move_uploaded_file($signtmpname, "signature/" . $sign);

        if ($query) {
            echo "Data uploaded with file";
        } else {
            echo "Data not updated with file";
        }
    } else {

        $up1 = "UPDATE stepform SET   name='$name',  email='$email',mobile='$mobile',gender='$gender',city='$city',
        address='$address',course='$course' WHERE id='$id'";

        $q1 = mysqli_query($conn, $up1);

        if ($q1) {
            echo "Data update without file";
        } else {
            echo "Data not update without file";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>

<body>

    <h1>Edit All Details</h1>

    <form method="post" enctype="multipart/form-data">

        Name:
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <br><br>

        Email:
        <input type="text" name="email" value="<?php echo $row['email']; ?>">
        <br><br>

        Mobile:
        <input type="number" name="mobile" value="<?php echo $row['mobile']; ?>">
        <br><br>

        Gender:

        <input type="radio" value="Male" name="gender"
            <?php
            if ($row['gender'] == "Male") {
                echo "checked";
            }
            ?>> Male

        <input type="radio" value="Female" name="gender"
            <?php
            if ($row['gender'] == "Female") {
                echo "checked";
            }
            ?>> Female

        <br><br>

        City:

        <select name="city">

            <option value="Kanpur"
                <?php
                if ($row['city'] == "Kanpur") {
                    echo "selected";
                }
                ?>>Kanpur</option>

            <option value="Lucknow"
                <?php
                if ($row['city'] == "Lucknow") {
                    echo "selected";
                }
                ?>>Lucknow</option>

            <option value="Prayagraj"
                <?php
                if ($row['city'] == "Prayagraj") {
                    echo "selected";
                }
                ?>>Prayagraj</option>

            <option value="Sultanpur"
                <?php
                if ($row['city'] == "Sultanpur") {
                    echo "selected";
                }
                ?>>Sultanpur</option>

        </select>

        <br><br>

        Address:

        <textarea name="address"><?php echo $row['address']; ?></textarea>

        <br><br>

        Course:

        <?php $courses = explode(",", $row['course']);  ?>

        <input type="checkbox" name="course[]" value="PHP"
            <?php
            foreach ($courses as $course) {
                if ($course == 'PHP') {
                    echo "checked";
                }
            }
            ?>> PHP

        <input type="checkbox" name="course[]" value="Java"
            <?php
            foreach ($courses as $course) {
                if ($course == 'Java') {
                    echo "checked";
                }
            }
            ?>> Java

        <input type="checkbox" name="course[]" value="Python"
            <?php
            foreach ($courses as $course) {
                if ($course == 'Python') {
                    echo "checked";
                }
            }
            ?>> Python

        <input type="checkbox" name="course[]" value="MERN"
            <?php
            foreach ($courses as $course) {
                if ($course == 'MERN') {
                    echo "checked";
                }
            }
            ?>> MERN

        <br><br>

        Profile:

        <input type="file" name="profile">

        <br><br>

        Signature:

        <input type="file" name="sign">

        <br><br>

        <button type="submit" name="next">Update</button>

    </form>

</body>

</html>