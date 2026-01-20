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
   
    
    <form action="dashboard.php" method="post" id="Admin_login" onsubmit="return validateAdminLogin()">
        <label for="admin-username">User Name:</label><br>
        <input type="text" id="admin-username" name="admin_name"><br>

        <label for="admin-password">Password:</label><br>
        <input type="password" id="admin-password" name="admin_pass"><br>

        <input type="checkbox" name="remember_me" id="remember_me"> Remember Me<br><br>

        <input type="submit" value="Submit"><br>

       
        <div id="login-error" style="color:red; margin-top:5px;"></div>

        <p>Forgot your pass? <a href="admin_forgotPass.php">Click here</a></p>
        <p>Don't have an account? <a href="admin_register.php">Register</a></p>
    </form>

    <p>Go <a href="../../index.php">back</a></p>
</div>


<script src="admin.js"></script>
</body>
</html>


