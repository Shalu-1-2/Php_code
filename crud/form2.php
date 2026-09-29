<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>student form</h1>
    <form action="form2code.php" method="post">
        Name : <input type="text" name="name"> <br><br>
        Mobile : <input type="number" name="mobile"> <br><br>
        Gender : <input type="radio" value="male" name="gender"> male 
                <input type="radio" value="female" name="gender"> female <br><br>
        Course : <input type="checkbox" value="PHP" name="course[]"> PHP
                 <input type="checkbox" value="Java" name="course[]">Java 
                 <input type="checkbox" value="Python" name="course[]"> Python
                 <input type="checkbox" value="MERN" name="course[]"> MERN   
                 <br><br>
        City : <select name="city">
               <option value="Lucknow">Lucknow</option>
               <option value="Kanpur">Kanpur</option>
               <option value="Prayagraj">Prayagraj</option>
               <option value="Gorakhpur">Gorakhpur</option>
        </select> <br><br>      
          Address : <textarea name="address"></textarea> <br><br> 
          <button name="submit">Submit</button>
    </form> 
</body>
</html>