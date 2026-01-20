<!DOCTYPE HTML>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="container">
    <form method="post" onsubmit="return validateChangePassword()">
        <h2>Change Password</h2>

        <div class="input-group">
            <label>Old Password</label><br>
            <input type="password" id="old-password" name="old_password" placeholder="Enter Old Password" required><br>
        </div>

        <div class="input-group">
            <label>New Password</label><br>
            <input type="password" id="new-password" name="new_password" placeholder="Enter New Password" required><br>
        </div>

        <div class="input-group">
            <label>Confirm Password</label><br>
            <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm New Password" required><br>
            <span id="change-pass-error" class="submit-error"></span>
        </div>

        <input type="submit" value="Change Password"><br>
        <a href="admin_login.php">Back to Login</a><br>
    </form>
</div>
<script src="admin.js"></script>
</body>
</html>
