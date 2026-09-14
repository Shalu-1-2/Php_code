<?php

if (isset($_POST["submit"])) {

    $num1 = $_POST["num1"] ?? "";
    $num2 = $_POST["num2"] ?? "";

    $operate = $_POST["operate"] ?? "";

    switch ($operate) {

        case ("+"):
            $result = $num1 + $num2;
            echo $result;
        break;
        case ("-"):
            $result = $num1 - $num2;
            echo $result;
            break;
        case ("*"):
            $result = $num1 * $num2;
            echo $result;
            break;
        case ("/"):
            $result = $num1 / $num2;
            echo $result;
            break;

        default:
            echo "Number is not valid";
    }
}
