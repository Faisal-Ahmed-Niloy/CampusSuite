<?php ?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Change Password</title>
    <link rel="stylesheet" href="teacher.css">
</head>

<body>

<div class="dashboard-container">
    <div class="dashboard-header">
        <h1 class="dashboard-title">Teacher's Dashboard</h1>
        <a href="teacherlogin.php" class="logout-button"
           onclick="return confirm('Are you sure you want to logout?');">Logout</a>
    </div>

    
    <div class="dashboard-content">

        
        <div class="sidebar">
            <ul>
                <li><a href="my_courses.php" >My Courses</a></li><br>
                <li><a href="teacher_givemarks.php">Give Marks</a></li><br>
                
              
                <li><a href="teacher_notice.php">Give Notice</a></li><br>
                <li><a href="teacher_changePass.php" class="active">Change Password</a></li>
            </ul>
        </div>

        
        <div class="reg-container">
            <div class="form-boxforgotpass" id="change-password-form">

                <form method="POST" onsubmit="return validateChangePassword()">
                    <h2>Change Password</h2>

                    <label>Current Password</label><br><br>
                    <input type="password" id="old_password" name="old_password" placeholder="Enter Current Password">
                    <span id="oldPassError" class="error"></span><br><br>

                    <label>New Password</label><br><br>
                    <input type="password" id="new_password" name="new_password" placeholder="Enter New Password">
                    <span id="newPassError" class="error"></span><br><br>

                    <button type="submit" name="change_password">Change Password</button><br><br>
                </form>

            </div>
        </div>

    </div>
</div>


<script>
function validateChangePassword() {

    let oldPass = document.getElementById("old_password").value.trim();
    let newPass = document.getElementById("new_password").value.trim();

    let oldError = document.getElementById("oldPassError");
    let newError = document.getElementById("newPassError");

    let valid = true;

    
    oldError.innerHTML = "";
    newError.innerHTML = "";

    
    if (oldPass === "") {
        oldError.innerHTML = "Current password is required";
        valid = false;
    }

   
    if (newPass === "") {
        newError.innerHTML = "New password is required";
        valid = false;
    } else if (newPass.length < 6) {
        newError.innerHTML = "Password must be at least 6 characters";
        valid = false;
    } else if (oldPass === newPass) {
        newError.innerHTML = "New password cannot be same as old password";
        valid = false;
    }

    return valid; 
}
</script>

</body>
</html>