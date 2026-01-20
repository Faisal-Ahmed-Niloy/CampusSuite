<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Courses</title>
    <link rel="stylesheet" href="../css/teacher.css">
</head>

<body>

<div class="dashboard-container">

    
    <div class="dashboard-header">
        <h1 class="dashboard-title">Teacher's Dashboard</h1>
        <a href="teacherlogin.php" class="logout-button"
           onclick="return confirm('Are you sure you want to logout?');">
            Logout
        </a>
    </div>

    
    <div class="dashboard-content">

        
        <div class="sidebar">
            <ul>
                <li><a href="my_courses.php" class="active">My Courses</a></li><br>
                <li><a href="teacher_givemarks.php">Give Marks</a></li><br>
                
              
                <li><a href="teacher_notice.php">Give Notice</a></li><br>
                <li><a href="teacher_changePass.php">Change Password</a></li>
            </ul>
        
        </div>

        
        <div class="main-content">
            <h2>My Courses</h2>

            <div class="courses-container">

                <div class="course-card">
                    <h3>Web Development</h3>
                    <p>HTML, CSS, JavaScript, PHP</p>
                    <a href="teachercourse1.php">View Course</a>
                </div>

                
                <div class="course-card">
                    <h3>Software Engineering</h3>
                    <p>SDLC, UML, Agile Methods</p>
                    <a href="teachercourse2.php">View Course</a>
                </div>

            </div>
        </div>

    </div>
</div>

</body>
</html>