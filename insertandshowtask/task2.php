<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form-box">
        <h2>Student Registration</h2>

        <form  action="submit2.php" method="post">

            <label>Student Name</label>
            <input type="text" name="name" placeholder="Enter student name">

            <label>Father Name</label>
            <input type="text" name="fname" placeholder="Enter father name">

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email">

            <label>Mobile</label>
            <input type="text" name="mobile" placeholder="Enter mobile">

            <label>Gender</label>
            <div class="gender">
                <label><input type="radio" name="gender" value="Male"> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
            </div>

            <label>Course</label>
            <select name="course">
                <option value="">Select Course</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                <option value="B.Tech">B.Tech</option>
                <option value="Diploma">Diploma</option>
            </select>

            <label>City</label>
            <input type="text" name="city" placeholder="Enter city">

            <label>Address</label>
            <textarea name="address" placeholder="Enter address"></textarea>

            <button type="submit">Submit</button>

        </form>


    </div>

</body>

</html>