<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>My Form</h1>
    <form action="task1code.php" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name"> <br><br>
        Number: <input type="number" name="mobile"> <br><br>
        Email: <input type="email" name="email"> <br><br>
        Gender: <input type="radio" value="male" name="gender">
        Male <input type="radio" value="female" name="gender">
        Female <br><br> 
        Profile Image: <input type="file" name="image"> <br><br>
        Resume: <input type="file" name="file"> <br><br>
        <button name="save">Save</button>
    </form>
</body>

</html>