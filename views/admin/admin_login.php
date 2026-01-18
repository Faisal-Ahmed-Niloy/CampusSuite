<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <div class="container">
        <h2>Admin Login Portal</h2>
        <br>

        <form action="" id="admin_login">
            <label for="admin_name">Admin Name:</label><br>
            <input type="text" id="admin_name" required>
            <br>

            <label for="admin_pass">Password:</label><br>
            <input type="password" id="admin_pass" required>
            <br><br>

            <input type="submit" value="Submit"><br>
            <p>Don't have an account? <a href="admin_register.php">Register</a></p>
        </form>

        <p>Go <a href="../../index.php">back</a></p>
    </div>
</body>
</html>

