<?php

$conn =mysqli_connect("localhost","root","","studentcrud");

if(!$conn){
    echo "Database connection Failed".mysqli_connect_error();  
}