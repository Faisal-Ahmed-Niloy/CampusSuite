<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="teacher.css">
</head>
<body >

<div class="dashboard-container">
            <div class="dashboard-header">
    <h1 class="dashboard-title">Teacher's Dashboard</h1>

    <a href="teacherlogin.php" class="logout-button" onclick="return confirm('Are you sure you want to logout?');">
    Logout
</a>

    
            </div>
    
    <div class="dashboard-content">
        <div class="sidebar">
            <ul>
                <li><a href="my_courses.php" >My Courses</a></li><br>
                <li><a href="teacher_givemarks.php">Give Marks</a></li><br>
                
              
                <li><a href="teacher_notice.php"class="active">Give Notice</a></li><br>
                <li><a href="teacher_changePass.php">Change Password</a></li>
            </ul>
        </div>
   
</body>
</html>