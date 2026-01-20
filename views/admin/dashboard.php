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
    <title>Admin Dashboard</title>
</head>
<body>

<div class="container">
    <h2>Welcome, <?php echo htmlspecialchars($admin_name); ?> 👋</h2>

    <p style="margin-bottom: 20px;">
      
    </p>

    
    <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-bottom: 20px;">

        <form action="assign_teacher.php">
            <input type="submit" value="Assign Teacher">
        </form>

        <form action="courses.php">
            <input type="submit" value="Courses">
        </form>

        <form action="users.php">
            <input type="submit" value="Users">
        </form>

        <form action="admin_profileUpdate.php">
            <input type="submit" value="Profile Update">
        </form>

        <form action="admin_register.php">
            <input type="submit" value="Add Admin">
        </form>

       

        <form action="admin_logout.php" method="post">
            <input type="submit" value="Logout">
        </form>

    </div>

    <p style="margin-top: 20px;">Go <a href="../../index.php">back to home</a></p>
</div>

</body>
</html>
