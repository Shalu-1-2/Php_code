<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <style>
        .outer{
               height: 400px;
               width: 400px;
               margin:  50px auto;
               border: 1px solid;
               padding: 40px;
        }
    </style>
</head>
<body>
    <div class="outer">
         <h1>Employee Detail</h1>
     <form action="form1code.php"  method="post">
       Name:
       <input type="text" name="name" id=""> <br><br>
       Email:
       <input type="email" name="email"/>
        <br><br>
        Mobile:
        <input type="number" name="mobile"/><br><br>
        DOB:
        <input type="date" name="dob" /> <br><br>
        Password:
        <input type="password" name="password" />
        <button>Submit</button>

     </form>
    </div>
</body>
</html>