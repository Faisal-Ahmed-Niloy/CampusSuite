<!DOCTYPE HTML>
<html>
<head>
    <title>Admin Logout</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php
session_start();


if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
    header("Location: admin_login.php");
    exit;
}
?>

<div class="container">
    <form>
        <h2 style="text-align:center; margin-bottom:20px;">Logout</h2>
        <p style="text-align:center; font-size:16px;">Are you sure you want to logout?</p>

        <div style="text-align:center; margin-top:30px;">
            <button type="button" onclick="adminLogout()">Yes, Logout</button>
            <a href="admin_dashboard.php" style="margin-left:20px; color:#2d8cf0; text-decoration: none;">Cancel</a>
        </div>
    </form>
</div>

<script src="admin.js"></script>
</body>
</html>
