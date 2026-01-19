<!DOCTYPE HTML>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="container">
    <form method="post" onsubmit="return validateAdminLogin()">
        <h2>Admin Login</h2>

        <div class="input-group">
            <label>Username</label><br>
            <input type="text" id="admin-username" name="username" placeholder="Enter Username" required><br>
            <span id="login-error" class="submit-error"></span><br>
        </div>

        <div class="input-group">
            <label>Password</label><br>
            <input type="password" id="admin-password" name="password" placeholder="Enter Password" required><br>
            <br>
        </div>

        <input type="submit" value="Login"><br>
        <a href="admin_forgotpass.php">Forgot Password?</a><br>
    </form>
</div>
<script src="admin.js"></script>
</body>
</html>
