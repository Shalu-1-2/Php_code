<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    session_start();

    if (isset($_SESSION['customer'])) {
        echo "view session:-  " . $_SESSION['customer'] . "<br>";
    } else {
        echo " session  detail is not show";
    }
    ?>
</body>

</html>