<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Registration</title>
</head>
<body>
    
    <div class="container">
        <h2>Admin Registration</h2>
        <form action="" id="admin_register">

            <label for="name">Name:</label>
            <input type="text" id="admin_name" required><br>
            
            <label for="email">Email:</label>
            <input type="email" id="admin_email" placeholder="Enter a valid Email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="number" id="admin_phone" placeholder="atleast 11 digit" required><br>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob_admin" required><br><br>
            
            <label for="gender">Select Gender:</label>
            <input type="radio" name="gender" class="male" value="Male">Male  
            <input type="radio" name="gender" class="female" value="Female">Female
            <br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="admin_pass" placeholder="Enter a Password (minimum 8 character)"><br>
            
            <input type="submit" value="Submit"> <br>
            <p>Already have an account? <a href="admin_login.php">Login</a></p>
        </form>
        <p>Go <a href="../../index.php">back</a></p>
        <p style="margin-top: 20px;">
        Back to <a href="dashboard.php">Dashboard</a>
    </p>
    </div>
<script src="admin.js"></script>
</body>
</html>
