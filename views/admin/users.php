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
    <title>Users</title>
</head>
<body>

<div class="container">
    <h2>Users</h2>
    <p>View, add, or remove users here.</p>

    <form action="" method="post">
        <label for="user_name">User Name:</label>
        <input type="text" name="user_name" id="user_name" placeholder="Enter User Name" required>

        <label for="user_email">Email:</label>
        <input type="email" name="user_email" id="user_email" placeholder="Enter Email" required>

        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="">Select Role</option>
            <option value="Student">Student</option>
            <option value="Teacher">Teacher</option>
        </select>

        <input type="submit" value="Add / Update User">
    </form>

    <p style="margin-top: 20px;">
        Back to <a href="dashboard.php">Dashboard</a>
    </p>
</div>

</body>
</html>







