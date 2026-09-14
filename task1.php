<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>User Registration</h2>

    <form action="submit1.php" method="post" enctype="multipart/form-data">

        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name">

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
            <option value="PHP">PHP</option>
            <option value="ASP.NET">ASP.NET</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
        </select>

        <label>City</label>
        <input type="text" name="city" placeholder="Enter city">

        <label>Address</label>
        <textarea name="address" placeholder="Enter address"></textarea>

        <label>Profile</label>
        <input type="file" name="profile">

        <button type="submit">Submit</button>

    </form>
</div>

</body>
</html>