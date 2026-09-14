<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>Teacher Registration</h2>

    <form action="submit5.php" method="post">

        <label>Teacher Name</label>
        <input type="text" name="name" placeholder="Enter teacher name">

        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email">

        <label>Mobile</label>
        <input type="text" name="mobile" placeholder="Enter mobile">

        <label>Gender</label>
        <div class="gender">
            <label><input type="radio" name="gender" value="Male"> Male</label>
            <label><input type="radio" name="gender" value="Female"> Female</label>
        </div>

        <label>Subject</label>
        <select name="subject">
            <option value="">Select Subject</option>
            <option value="PHP">PHP</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
            <option value="Web Development">Web Development</option>
        </select>

        <label>Experience</label>
        <input type="number" name="experience" placeholder="Enter experience in years">

        <label>City</label>
        <input type="text" name="city" placeholder="Enter city">

        <label>Address</label>
        <textarea name="address" placeholder="Enter address"></textarea>

        <button type="submit">Submit</button>

    </form>
</div>

</body>
</html>