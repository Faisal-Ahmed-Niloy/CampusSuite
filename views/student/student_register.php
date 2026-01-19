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
        <form action="" id="student_register">

            <label for="name">Name:</label><br>
            <input type="text" id="student_name" required><br>
            <br>
            <label for="email">Email:</label><br>
            <input type="email" id="student_email" placeholder="Enter a valid Email" required><br>
            <br>
            <label for="phone">Phone Number:</label><br>
            <input type="number" id="student_phone" placeholder="atleast 11 digit" required><br><br>
            <label for="dob">Date of Birth:</label><br>
            <input type="date" id="dob_student" required><br><br>
            
            <label for="gender">Select Gender:</label><br>
            <input type="radio" name="gender" class="male" value="Male">Male  
            <input type="radio" name="gender" class="female" value="Female">Female
            <br><br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="student_pass" placeholder="Enter a Password (minimum 8 character)"><br>
            <br>
            <input type="submit" value="Submit"> <br>
            <p>Already have an account? <a href="student_login.php">Login</a></p>
        </form>
        <p>Go <a href="../../index.php">back</a></p>
    </div>

</body>
</html>