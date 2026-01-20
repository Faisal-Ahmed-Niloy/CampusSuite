<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Admin Login</title>
</head>
<body>

<div class="container">
    <h2>Admin Login Portal</h2>
    <br>
   
    <form action="dashboard.php" method="post" id="Admin_login">
        <label for="name">User Name:</label><br>
        <input type="text" id="admin_name" name="admin_name" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="admin_pass" name="admin_pass" required><br>

        <input type="checkbox" name="remember_me" id="remember_me"> Remember Me<br><br>

        <input type="submit" value="Submit"><br>

        <p>Forgot your pass? <a href="admin_forgotPass.php">Click here</a></p>
        <p>Don't have an account? <a href="admin_register.php">Register</a></p>
    </form>

    <p>Go <a href="../../index.php">back</a></p>
</div>

</body>
</html>
