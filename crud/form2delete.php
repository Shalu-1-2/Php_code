<?php

if (! isset($_REQUEST['id'])) {
    header("location:form2show.php");
    exit();
}

$id = $_REQUEST['id'];

$conn  = mysqli_connect("localhost", "root","","studentcrud");

if (! $conn) {
    echo "database connection failed" . mysqli_connect_error();
}

$del = "DELETE FROM form2 WHERE id ='$id'";

$query = mysqli_query($conn, $del);

if ($query) {
    echo "<script>
        alert('dada delete successfully');
        window.location.href='form2show.php';
    </script>";
} else {
    echo "<script>
        alert('dada  not  delete');
        window.location.href='form2show.php';
    </script>";
}
