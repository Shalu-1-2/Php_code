<?php

include("db.php");

if(!isset($_REQUEST['id'])){
    header("location:showform.php");
    exit();
}

$id = $_REQUEST['id'];

$sel = "SELECT * FROM stepform WHERE id='$id'";

$query = mysqli_query($conn, $sel);

$row = mysqli_fetch_assoc($query);

if(file_exists("profile/" . $row['profile'])){
    unlink("profile/" . $row['profile']);
}

if(file_exists("signature/" . $row['signature'])){
    unlink("signature/" . $row['signature']);
}

$del = "DELETE FROM stepform WHERE id='$id'";

$query1 = mysqli_query($conn, $del);

if($query1){
    echo "data delete successfully";
}else{
    echo "data not deleted";
}

?>