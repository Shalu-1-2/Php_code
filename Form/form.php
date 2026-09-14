<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.outer{
    height: 400px;
    width: 400px;
    margin: 50px auto;
    border:1px solid ;
    background-color:blue;
    padding:20px;
    color:white;
}
    </style>
</head>
<body>
    <div class="outer">
        <h1>Register form</h1>
    <form action="formcode.php" method="get">
        Name:
        <input type="text" name="name" /><br><br>
        Age :
        <input type="number" name="age"/> <br><br>
        <button>Save</button>
    </form>
    </div>
</body>
</html>