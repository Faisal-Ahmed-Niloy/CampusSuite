<?php

?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Registration</title>
    <link rel="stylesheet" href="teacher.css">

</head>
<body>

        <div class="reg-container">
            
        <div class="form-boxregister" id="registration-form">
    <form method="POST" onsubmit="return validateRegister()">
    <h2>Registration</h2>

    <label>First Name</label><br>
    <input type="text" id="first_name" name="first_name" placeholder="Enter First Name">
    <span id="firstNameError" class="error"></span><br>

    <label>Last Name</label><br>
    <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name">
    <span id="lastNameError" class="error"></span><br>

    <label>Date of Birth</label><br>
    <input type="date" id="dob" name="dob">
    <span id="dobError" class="error"></span><br>

    <label>Gender</label>
    <div class="gender-box">
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
    </div>
    <span id="genderError" class="error"></span><br>

    <label>Phone Number</label><br>
    <input type="text" id="phone" name="phone" placeholder="Mobile/Phone">
    <span id="phoneError" class="error"></span><br>

    <label>Email</label><br>
    <input type="email" id="reg_email" name="reg_email" placeholder="Email Address">
    <span id="emailError" class="error"></span><br>

    <label>Password</label><br>
    <input type="password" id="reg_password" name="reg_password" placeholder="Password">
    <span id="passwordError" class="error"></span><br><br>

    <button type="submit" name="register">Register</button><br><br>
    <p>Already have an account? <a href="teacher_login.php">Login</a></p>
</form>

</div>


        </div>

        <script>
function validateRegister() {

    let firstName = document.getElementById("first_name").value.trim();
    let lastName = document.getElementById("last_name").value.trim();
    let dob = document.getElementById("dob").value;
    let phone = document.getElementById("phone").value.trim();
    let email = document.getElementById("reg_email").value.trim();
    let password = document.getElementById("reg_password").value;

    let genderChecked = document.querySelector('input[name="gender"]:checked');

    let valid = true;

   
    document.querySelectorAll(".error").forEach(e => e.innerHTML = "");

   
    if (firstName === "") {
        document.getElementById("firstNameError").innerHTML = "First name is required";
        valid = false;
    }

    if (lastName === "") {
        document.getElementById("lastNameError").innerHTML = "Last name is required";
        valid = false;
    }

    
    if (dob === "") {
        document.getElementById("dobError").innerHTML = "Date of birth is required";
        valid = false;
    }

 
    if (!genderChecked) {
        document.getElementById("genderError").innerHTML = "Please select gender";
        valid = false;
    }


    let phonePattern = /^[0-9]{10,15}$/;
    if (phone === "") {
        document.getElementById("phoneError").innerHTML = "Phone number is required";
        valid = false;
    } else if (!phone.match(phonePattern)) {
        document.getElementById("phoneError").innerHTML = "Enter valid phone number";
        valid = false;
    }

    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (email === "") {
        document.getElementById("emailError").innerHTML = "Email is required";
        valid = false;
    } else if (!email.match(emailPattern)) {
        document.getElementById("emailError").innerHTML = "Invalid email format";
        valid = false;
    }


    if (password === "") {
        document.getElementById("passwordError").innerHTML = "Password is required";
        valid = false;
    } else if (password.length < 6) {
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters";
        valid = false;
    }

    return valid; 
}
</script>
<body>
</html>
