<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/student.css">
    <title>Student Login</title>
</head>
<body>
    <div class="container">
        <h2>Student Login Portal</h2>
        <br>
        <form action="../../controllers/StudentController.php"  id="student_login" method="post">
            <label for="name">User Name:</label><br>
            <input type="text" id="student_name" value="<?php echo isset($_SESSION['student_username']) ? $_SESSION['student_username'] : ""; ?>" required>
            <span>
			<?php if (isset($_SESSION['student_usernameErrMsg'])) { echo $_SESSION['student_usernameErrMsg']; unset($_SESSION['student_usernameErrMsg']); } ?>
		    </span>
            
            <br>
            <label for="password">Password:</label><br>
            <input type="password" id="student_pass" required>
            <span>
			<?php if (isset($_SESSION['student_passwordErrMsg'])) { echo $_SESSION['student_passwordErrMsg']; unset($_SESSION['student_passwordErrMsg']); } ?>
		    </span>
            <br>
            <input type="checkbox" name="remember_me" id="remember_me"> Remember Me</input>
            <br><br>
            <input type="submit" value= "Login"><br>
            <p>Forgot your pass? <a href="student_forgotPass.php">Click here</a></p>
            <p>Don't have an account? <a href="student_register.php">Register</a></p>
        </form>
        <p>Go <a href="../../index.php">back</a></p>
    </div>

    <script src="../js/student.js"></script>

</body>
</html>