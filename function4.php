<?php

function countdown($num){
    if($num>0){
        echo $num ."<br>";
        countdown($num -1);
    }
}

countdown(5);
?>