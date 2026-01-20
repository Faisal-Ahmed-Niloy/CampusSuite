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
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../css/student.css">
</head>
<body>
    <?php include_once "../header.php" ?>
    <div class="container">
        <h1>Hi, <?php echo isset($_SESSION['student_username']) ? $_SESSION['student_username'] : 'Anonymous User'; ?></h1>
        <h2>Student Dashboard</h2>
        <ul>
            <li><a href="mycourses.php">My Courses</a></li>
            <li><a href="grades.php">Grades</a></li>
            <li><a href="student_notice.php">Notices</a></li>
            <li><a href="student_changePass.php">Change Password</a></li>
            <li><a href="student_profileUpdate.php">Profile Update</a></li>
            <li><a href="student_file.php">Files</a></li>
        </ul>
        <a href="student_logout.php" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
    </div>
    <?php include_once "../footer.php" ?>
</body>
</html>
