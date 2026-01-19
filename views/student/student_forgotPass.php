<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body>
    <div class="container">
        <label for="reset_pass">Enter your E-mail for password reset link:</label>
        <input type="email" name="reset_email" id="reset_email" placeholder="Enter your account's email address">
        <p>Go <a href="student_login.php">back</a></p>
    </div>
</body>
</html>