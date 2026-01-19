<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusSuite</title>
</head>
<body>
    <h2>Welcome to CampusSuite</h2>
    <p>A comprehensive campus maintenance solution</p>

    <h3>Location Index: (testing)</h3>
    <p>________________________________</p>
    <p><b>Student Section</b></p>
    <a href="views/student/student_login.php">Student Login</a><br>
    <a href="views/student/student_register.php">Student Registration</a><br>
    <a href="views/student/student_forgotPass.php">Student Forgot Pass</a><br>
    <a href="views/student/student_changePass.php">Student Change Pass</a><br>
    <a href="views/student/dashboard.php">Student Dashboard</a><br>
    <br>
    <p><b>Admin Section</b></p>
    <a href="views/admin/admin_login.php">Admin Login</a><br>
    <a href="views/admin/admin_register.php">Admin Registration</a><br>
    <a href="views/admin/admin_forgotPass.php">Admin Forgot Pass</a><br>
    <a href="views/admin/admin_changePass.php">Admin Change Pass</a><br>
    <a href="views/admin/dashboard.php">Admin Dashboard</a><br>
    <a href="views/admin/admin_profileUpdate.php">Admin Profile Update</a><br>
    <a href="views/admin/admin_logout.php">Admin Logout</a><br>
    <a href="views/admin/users.php">Admin Users</a><br>
    <a href="views/admin/courses.php">Admin Courses</a><br>
    <a href="views/admin/assign_teacher.php">Assign Teacher</a><br>

</body>
</html>
