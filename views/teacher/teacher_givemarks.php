<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="../css/teacher.css">
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
                <li><a href="teacher_givemarks.php" class="active">Give Marks</a></li><br>
                
              
                <li><a href="teacher_notice.php">Give Notice</a></li><br>
                <li><a href="teacher_changePass.php">Change Password</a></li>
            </ul>
        </div>
        <div class="reg-container">
            
        <div class="form-boxgivemarks" id="change-password-form">
        
        <div class="main-content">
            <h2>Enter Student Marks</h2>

            <form method="post" action="">
                <label>Student ID</label><br>
                <input type="text" name="student_id" required><br><br>

                <label>Subject</label><br>
                <input type="text" name="subject" required><br><br>

                <label>Marks</label><br>
                <input type="number" name="marks" min="0" max="100" required><br><br>

                <button type="submit" name="submit_marks">Submit Marks</button>
            </form>

            <?php
            if (isset($_POST['submit_marks'])) {
                $student_id = $_POST['student_id'];
                $subject = $_POST['subject'];
                $marks = $_POST['marks'];

                echo "<p class='success-msg'>Marks submitted successfully!</p>";
            }
            ?>
        </div>

    </div>
</div>
        
   
</body>
</html>