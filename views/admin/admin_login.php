<!DOCTYPE HTML>
<html>
<body>
<<<<<<< HEAD

<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] == "admin" && $_POST["password"] == "1234") {
        $_SESSION["admin"] = "admin";
        header("Location: admin_dashboard.php");
    } else {
        $error = "Invalid Username or Password";
    }
}
?>

<h2>Admin Login</h2>

<form method="post">
Username: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit" value="Login">
</form>

<p style="color:red;"><?php echo $error; ?></p>

<a href="admin_forgotPass.php">Forgot Password?</a>

=======

<form action="admin_reset_password.php" method="post">
    Admin Email: <input type="text" name="email"><br><br>
    New Password: <input type="password" name="new_password"><br><br>
    <input type="submit" value="Reset Password">
</form>

>>>>>>> 6c29d7e12d50935c8ea06f555170b29a486c284b
</body>
</html>


