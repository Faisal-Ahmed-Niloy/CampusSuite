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
    <title>Assign Teacher</title>
</head>
<body>

<div class="container">
    <h2>Assign Teacher</h2>
    <p></p>

    <form action="" method="post">
        <label for="teacher_name">Teacher Name:</label>
        <input type="text" name="teacher_name" id="teacher_name" placeholder="Enter Teacher Name" required>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" placeholder="Enter Subject" required>

        <label for="class">Class:</label>
        <input type="text" name="class" id="class" placeholder="Enter Class/Section" required>

        <input type="submit" value="Assign Teacher">
    </form>

    <p style="margin-top: 20px;">
        Back to <a href="dashboard.php">Dashboard</a>
    </p>
</div>
<script src="admin.js"></script>
</body>
</html>


