<?php

?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    <link rel="stylesheet" href="teacher.css">

</head>
<body>

        
<div class="login-container">
    <div class="form-boxlogin" id="login-form">
        <form action="my_courses.php" method="post" onsubmit="return validateLogin()">

    <h2>Login</h2><br>

    <label>Email</label><br>
    <input type="email" id="email" name="log_email" placeholder="Email Address">
    <span id="emailError" class="error"></span><br><br>

    <label>Password</label><br>
    <input type="password" id="password" name="log_password" placeholder="Password">
    <span id="passwordError" class="error"></span><br><br>

    <button type="submit" name="login">Login</button><br><br>

    <p><a href="teacher_forgotPass.php">Forgot Password?</a></p>
    <p>Don't have an account?
        <a href="teacher_register.php">Register / Sign Up</a>
    </p>

</form>
    </div>
</div>

<script>
function validateLogin() {

    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    let emailError = document.getElementById("emailError");
    let passwordError = document.getElementById("passwordError");

    let isValid = true;

    
    emailError.innerHTML = "";
    passwordError.innerHTML = "";

    
    if (email === "") {
        emailError.innerHTML = "Email is required";
        isValid = false;
    } else {
        let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!email.match(emailPattern)) {
            emailError.innerHTML = "Invalid email format";
            isValid = false;
        }
    }

    
    if (password === "") {
        passwordError.innerHTML = "Password is required";
        isValid = false;
    } else if (password.length < 6) {
        passwordError.innerHTML = "Password must be at least 6 characters";
        isValid = false;
    }

    return isValid; 
}
</script>

</body>
</html>