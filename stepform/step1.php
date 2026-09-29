<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Step 1 personal Details</h1>
    <form action="step1code.php" method="post">
        Name : <input type="text" name="name" /> <br> <br>
        Email: <input type="email" name="email" /> <br> <br>

        mobile: <input type="number" name="mobile" /> <br> <br>

        Gender: <input type="radio" value="Male"  name="gender"> Male
        <input type="radio" value="Female"   name="gender"> Female 
        <br><br>

        <button name="next">Next</button>
    </form>
</body>

</html>