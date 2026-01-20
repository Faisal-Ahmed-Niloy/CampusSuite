<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/student.css">
    <title>Registration</title>
</head>
<body>
    
    <div class="container">
        <h2>Student Registration</h2>
        <form action="../../controllers/StudentController.php" id="student_register" method="post">

            <label for="name">Name:</label>
            <input type="text" id="student_name" required>
            <span id="student_name-error"></span><br>

            <label for="email">Email:</label>
            <input type="email" id="student_email" placeholder="Enter a valid Email" required>
            <span id="student_email-error"></span>

            <label for="phone">Phone Number:</label>
            <input type="number" id="student_phone" placeholder="atleast 11 digit" required>
            <span id="student_phone-error"></span><br>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob_student" required>
            <span id="dob_student-error"></span><br><br>

            <label for="gender">Select Gender:</label>
            <input type="radio" name="gender" class="male" value="Male">Male
            <input type="radio" name="gender" class="female" value="Female">Female
            <span id="gender-error"></span>
            <br><br>

            <label for="password">Password:</label>
            <input type="password" id="student_pass" placeholder="Enter a Password (minimum 8 character)">
            <span id="student_pass-error"></span><br>
            
            <input type="submit" value="Register"> <br>
            <p>Already have an account? <a href="student_login.php">Login</a></p>
        </form>
        <p>Go <a href="../../index.php">back</a></p>
    </div>

    <script src="../js/student.js"></script>

</body>
</html>