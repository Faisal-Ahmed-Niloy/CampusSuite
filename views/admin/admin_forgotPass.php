<!DOCTYPE HTML>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="container">
    <form method="post" onsubmit="return validateForgotPassword()">
        <h2>Forgot Password</h2>

        <div class="input-group">
            <label>Email</label><br>
            <input type="email" id="forgot-email" name="email" placeholder="Enter Email" required><br>
            <span id="forgot-error" class="submit-error"></span>
         </div>
        <input type="submit" value="Send Reset Link"><br>
        <a href="admin_login.php">Back to Login</a><br>
    </form>
</div>
<script src="admin.js"></script>
</body>
</html>



