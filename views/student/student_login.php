<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
</head>
<body>
    <div class="container">
        <h2>Student Login Portal</h2>
        <br>
        <form action=""  id="student_login">
            <label for="name">User Name:</label><br>
            <input type="text" id="student_name" required>
            <br>
            <label for="password">Password:</label><br>
            <input type="password" id="student_pass" required><br>
            <input type="checkbox" name="remember_me" id="remember_me"> Remember Me</input>
            <br><br>
            <input type="submit" value= "Submit"><br>
            <p>Forgot your pass? <a href="student_forgotPass.php">Click here</a></p>
            <p>Don't have an account? <a href="student_register.php">Register</a></p>
        </form>
        <p>Go <a href="../../index.php">back</a></p>
    </div>


</body>
</html>