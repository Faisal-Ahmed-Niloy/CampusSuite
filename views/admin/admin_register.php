<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        
        .container form {
            max-width: 500px;
            padding: 40px 30px;
        }

        input[type="submit"] {
            background: #141a34;
            color: #fff;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 4px;
            border: none;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: #2d8cf0;
        }

        .back-dashboard {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #2d8cf0;
            text-decoration: none;
            font-weight: 500;
        }
        .back-dashboard:hover {
            text-decoration: underline;
        }

        p.success-message {
            color: seagreen;
            text-align: center;
            font-weight: 600;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <form id="add_admin_form" onsubmit="return validateAddAdmin()">
        <h2 style="text-align:center; margin-bottom:25px;">Add Admin</h2>

       
        <div class="input-group">
            <label for="admin_name">Name</label><br>
            <input type="text" id="admin_name" placeholder="Enter Full Name" required><br>
            <span id="admin-name-error" class="submit-error"></span><br>
        </div>

        
        <div class="input-group">
            <label for="admin_email">Email</label><br>
            <input type="email" id="admin_email" placeholder="Enter a valid Email" required><br>
            <span id="admin-email-error" class="submit-error"></span><br>
        </div>

        
        <div class="input-group">
            <label for="admin_phone">Phone Number</label><br>
            <input type="text" id="admin_phone" placeholder="Enter Phone Number" required><br>
            <span id="admin-phone-error" class="submit-error"></span><br>
        </div>

   
        <div class="input-group">
            <label for="admin_dob">Date of Birth</label><br>
            <input type="date" id="admin_dob" required><br>
            <span id="admin-dob-error" class="submit-error"></span><br>
        </div>

        
        <div class="input-group">
            <label>Select Gender</label><br>
            <input type="radio" name="gender" id="male" value="Male"> Male
            <input type="radio" name="gender" id="female" value="Female"> Female
            <span id="admin-gender-error" class="submit-error"></span>
        </div>

        
        <div class="input-group">
            <label for="admin_pass">Password</label><br>
            <input type="password" id="admin_pass" placeholder="Enter a Password (minimum 8 characters)" required><br>
            <span id="admin-pass-error" class="submit-error"></span><br>
        </div>

        <input type="submit" value="Submit">

        <p style="text-align:center; margin-top:15px;">
            Already have an account? <a href="admin_login.php">Login</a>
        </p>
        <a class="back-dashboard" href="dashboard.php">← Back to Dashboard</a>
    </form>
</div>

<script src="admin.js"></script>
</body>
</html>

