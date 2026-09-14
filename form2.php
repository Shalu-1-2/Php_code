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
            border: 1px solid;
            border-radius: 10px;
            padding: 40px;
        }
    </style>
</head>
<body>
     <div class="outer">
        <h1>Student Form</h1>
        Name:
        <input type="text" placeholder="Enter your name"  name="name"/><br><br>
        Mobile:
        <input type="number" placeholder="Enter your mobile Number" name="mobile" /> <br><br>
        Gender: 
        <input type="radio" value="male" name="gender" />Male
        <input type="radio" value="male"  name="gender" />Female


        Course: 
        <input type="checkbox" value="PHP"  name="course[]" />
        PHP 
        <input type="checkbox" value="JAVA"   name="course[]" />
        JAVA
        <input type="checkbox" value="PYTHON"  name="course[]" />
        PYTHON 
        <input type="checkbox" value="MERN"   name="course[]" />
        MERN
                <br><br>

        City:
        <select>
            <option value="Lucknow">Lucknow</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Prayagraj">Prayagraj</option>
            <option value="Gorakhpur">Gorakhpur</option>
        </select>
        <br><br>

        Address:
        <textarea name="address" ></textarea>

        <button name="submit">Submit</button>
     </div>
</body>
</html>