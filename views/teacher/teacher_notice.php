<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Give Notice</title>
    <link rel="stylesheet" href="../css/teacher.css">
</head>
<body>

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
        <div class="reg-container">
            
        <div class="form-boxgivenotice" id="give-notice-form">

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="card">
                <h2>Give Notice</h2>

                <form method="post">
                    <label>Notice Title</label>
                    <input type="text" name="title" placeholder="Enter Notice Title" required>

                    <label>Notice Description</label>
                    <textarea name="description" placeholder="Enter Notice Details" required></textarea>

                    <button type="submit" name="submit_notice">Publish Notice</button>
                </form>

                <?php
                if (isset($_POST['submit_notice'])) {
                    echo "<p class='success-msg'>Notice published successfully!</p>";
                }
                ?>
            </div>
        </div>

    </div>
</div>

</body>
</html>