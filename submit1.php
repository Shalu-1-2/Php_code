<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];
    $city = $_POST["city"];
    $address = $_POST["address"];

    $profile = $_FILES["profile"]["name"];
    $tmp_name = $_FILES["profile"]["tmp_name"];

    if (!is_dir("uploads")) {
        mkdir("uploads");
    }

    move_uploaded_file($tmp_name, "uploads/" . $profile);

    $conn = mysqli_connect("localhost", "root", "", "phpcrud");
    if (! $conn) {
        echo "Database connection failed";
    }

    $ins = "INSERT INTO users 
        (name, email, mobile, gender, course, city, address, profile)
        VALUES 
        ('$name', '$email', '$mobile', '$gender', '$course', '$city', '$address', '$profile')";

    $query = mysqli_query($conn, $ins);

    if ($query) {
        echo "Data inserted successfully";
    } else {
        echo "Data not inserted";
    }
}
