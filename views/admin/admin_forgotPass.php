<!DOCTYPE HTML>
<html>
<body>

<h2>Forgot Password</h2>

<form method="post">
Email: <input type="text" name="email"><br><br>
<input type="submit" value="Reset Password">
</form>

<?php
if (!empty($_POST["email"])) {
    echo "Reset link sent to email (Demo)";
}
?>

<a href="admin_login.php">Back to Login</a>

</body>
</html>


