<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_POST["save"])) {

        $name = $_POST["name"] ?? '';
        $mobile = $_POST["mobile"] ?? '';

        echo "Name : $name <br>";
        echo "Mobile : $mobile";
    } else {
        
        // header('location:form1.php');
        echo "<script>
         alert('Wrong Way Access');

         window.location.href='form1.php';
        
        </script>";

    }

    ?>
</body>

</html>