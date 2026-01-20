<?php
session_start();

if (!isset($_SESSION['admin_name'])) {
    $admin_name = "Admin";
} else {
    $admin_name = $_SESSION['admin_name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Courses</title>
</head>
<body>

<div class="container">
    <h2>Courses</h2>
    <p></p>

    <form action="" method="post">
        <label for="course_name">Course Name:</label>
        <input type="text" name="course_name" id="course_name" placeholder="Enter Course Name" required>

        <label for="course_code">Course Code:</label>
        <input type="text" name="course_code" id="course_code" placeholder="Enter Course Code" required>

        <input type="submit" value="Add / Update Course">
    </form>

    <p style="margin-top: 20px;">
        Back to <a href="dashboard.php">Dashboard</a>
    </p>
</div>
<script src="admin.js"></script>
</body>
</html>


