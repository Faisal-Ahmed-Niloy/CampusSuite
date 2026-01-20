<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Courses</title>
    <link rel="stylesheet" href="teacher.css">
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
            <h2>Web Development</h2>

            
            <h3>Add Student</h3>
            <form id="addStudentForm">
                <input type="text" id="studentId" placeholder="Student ID" required>
                <input type="text" id="studentName" placeholder="Student Name" required>
                <input type="email" id="studentEmail" placeholder="Email" required>
                <button type="submit">Add Student</button>
            </form>

            
            <h3>Student List</h3>
            <table class="student-table" id="studentTable">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>

    </div>
</div>

</div>
<script src="teacher.js"></script>

</body>
</html>