<?php
    

    // for($i=1; $i<=10; $i++)
    //     {
    //     if($i == 6){
    //         continue ;
    //     }

    //     echo $i."<br>";
    // }
    
    // for($i=1; $i<=10; $i++)
    //     {
    //     if($i == 6){
    //         break;
    //     }

    //     echo $i."<br>";
    // }

    // for($i=1; $i<=100; $i++)
    //     {
    //     if($i>=11 && $i<=20){
    //         continue;
    //     }
    //     if($i>=31 && $i<=40){
    //         continue;
    //     }
    //     if($i>=51 && $i<=60){
    //         continue;
    //     }
    //     if($i>=71 && $i<=80){
    //         continue;
    //     }
    //     if($i>=91 && $i<=100){
    //         continue;
    //     }

    //     echo $i."<br>";
    // }


    for($i=1; $i<=100; $i++){
        if(($i>=11 && $i<=20) || ($i>=31 && $i<=40) || ($i>=51 && $i<=60)|| ($i>=71 && $i<=80)|| ($i>=91 && $i<=100)){
            continue;
        }
        echo $i."<br>";
    }


?>