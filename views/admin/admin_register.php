<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>
<body>
    
    <div class="container">
        <h2>Admin Registration</h2>

        <form action="" id="admin_register">

            <label for="admin_name">Name:</label><br>
            <input type="text" id="admin_name" required><br>
            <br>

            <label for="admin_email">Email:</label><br>
            <input type="email" id="admin_email" placeholder=" enter a valid Email" required><br>
            <br>

            <label for="admin_phone">Phone Number:</label><br>
            <input type="number" id="admin_phone" required><br>
            <br>

            <label for="admin_dob">Date of Birth:</label><br>
            <input type="date" id="admin_dob" required><br>
            <br>

            <label for="gender">Select Gender:</label><br>
            <input type="radio" name="gender" id="male" value="Male"> Male  
            <input type="radio" name="gender" id="female" value="Female"> Female
            <br><br>

            <label for="admin_pass">Password:</label><br>
            <input type="password" id="admin_pass" placeholder="Enter a Password (minimum 8 characters)" required><br>
            <br>

            <input type="submit" value="Submit"><br>
            <p>Already have an account? <a href="admin_login.php">Login</a></p>
        </form>

        <p>Go <a href="../../index.php">back</a></p>
    </div>

</body>
</html>
