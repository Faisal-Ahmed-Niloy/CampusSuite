<?php
session_start();
if (!isset($_SESSION['isLoggedIn'])) {
	header("Location: student_login.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
</head>
<body>
    
    <h1>Hi, <?php echo isset($_SESSION['student_username']) ? $_SESSION['student_username'] : 'Anonymous User'; ?></h1>

    <a href="student_logout.php" class="logout_btn" onclick="return confirm('Are you sure you want to logout?')">Logout</a>

</body>
</html>