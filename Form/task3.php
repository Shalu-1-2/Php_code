<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        form {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 8px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <form action="page3.php" method="post">

        <h1>Multiplication</h1>

        Number 1:
        <input type="number" name="num1">

        Number 2:
        <input type="number" name="num2">

        <button name="mul">Submit</button>

    </form>

</body>

</html>