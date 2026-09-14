<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>Employee Registration</h2>

    <form action="" method="post" enctype="multipart/form-data">

        <label>Employee Name</label>
        <input type="text" name="employee_name" placeholder="Enter employee name">

        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email">

        <label>Mobile</label>
        <input type="text" name="mobile" placeholder="Enter mobile">

        <label>Gender</label>
        <div class="gender">
            <label><input type="radio" name="gender" value="Male"> Male</label>
            <label><input type="radio" name="gender" value="Female"> Female</label>
        </div>

        <label>Department</label>
        <select name="department">
            <option value="">Select Department</option>
            <option value="IT">IT</option>
            <option value="HR">HR</option>
            <option value="Sales">Sales</option>
            <option value="Marketing">Marketing</option>
        </select>

        <label>City</label>
        <input type="text" name="city" placeholder="Enter city">

        <label>Address</label>
        <textarea name="address" placeholder="Enter address"></textarea>

        <label>Profile Image</label>
        <input type="file" name="profile_image">

        <button type="submit">Submit</button>

    </form>
</div>

</body>
</html>