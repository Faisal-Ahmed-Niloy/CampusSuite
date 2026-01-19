<?php

?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Registration</title>
    <link rel="stylesheet" href="teacher.css">

</head>
<body>

        <div class="reg-container">
            
        <div class="form-boxregister" id="registration-form">
    <form action="" method="POST">
        <h2>Registration</h2>
        <label>First Name</label> <br>
        <input type="text" name="first_name" placeholder="Enter First Name" required>
        <label>Last Name</label> <br>
        <input type="text" name="last_name" placeholder="Enter Last Name" required>
        <br>
        <label>Date of Birth</label> <br>
        <input type="date" name="dob" required><br>

<label>Gender</label><br><br>
<div class="gender-box">
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
</div>

     <label> Phone Number </label><br>
        <input type="text" name="phone" placeholder="Mobile/Phone" required>
        <label>Email</label><br>
           <input type="email" name="reg_email" placeholder="Email Address" required>
        <label>Password</label><br>
        <input type="password" name="reg_password" placeholder="Password" required>

        <button type="submit" name="register">Register</button><br> <br>
        <p>Already have an account? <a href="teacher_login.php">Login</a></p>
    </form>
</div>


        </div>

<body>
</html>
