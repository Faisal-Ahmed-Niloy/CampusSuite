<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    $_SESSION['admin_name'] = "Admin";  
}


if (!isset($_SESSION['admin_pass'])) {
    $_SESSION['admin_pass'] = "admin1234";
}


if (isset($_POST['change_pass'])) {
   
    
   
    $_SESSION['admin_pass'] = $_POST['new-password'] ?? $_SESSION['admin_pass'];

   
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Change Password</title>
</head>
<body>
<div class="container">
    <form method="post">
        <h2>Change Password</h2>

        <label for="current-password">Current Password:</label>
        <input type="password" name="current-password" id="current-password" placeholder="Enter your current password" required>

        <label for="new-password">New Password:</label>
        <input type="password" name="new-password" id="new-password" placeholder="Enter a new password" required>

        <label for="confirm-password">Confirm New Password:</label>
        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm your new password" required>

       
        <input type="submit" name="change_pass" value="Change Password">

        <p>Go <a href="dashboard.php">back to dashboard</a></p>
        <p style="margin-top: 20px;">
        Back to <a href="admin_register.php">Add Admin</a>
    </p>
    </form>
</div>
<script src="admin.js"></script>
</body>
</html>





