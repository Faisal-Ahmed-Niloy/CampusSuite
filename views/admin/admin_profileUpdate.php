<?php
session_start();

$name = "Admin Name";
$email = "admin@email.com";
$phone = "0123456789";
$message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["admin_name"] ?? '';
    $email = $_POST["admin_email"] ?? '';
    $phone = $_POST["admin_phone"] ?? '';
    $message = "Profile Updated Successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Profile Update</title>
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
            font-weight: 500;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="post" onsubmit="return validateProfileUpdate()">
        <h2 style="text-align:center; margin-bottom:25px;">Update Profile</h2>

        
        <div class="input-group">
            <label for="profile-name">Name</label><br>
            <input type="text" id="profile-name" name="admin_name" value="<?php echo htmlspecialchars($name); ?>" placeholder="Enter Full Name" required><br>
            <span id="profile-name-error" class="submit-error"></span><br>
        </div>

      
        <div class="input-group">
            <label for="profile-email">Email</label><br>
            <input type="email" id="profile-email" name="admin_email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Enter Email" required><br>
            <span id="profile-email-error" class="submit-error"></span><br>
        </div>

        
        <div class="input-group">
            <label for="profile-phone">Phone Number</label><br>
            <input type="text" id="profile-phone" name="admin_phone" value="<?php echo htmlspecialchars($phone); ?>" placeholder="Enter Phone Number" required><br>
            <span id="profile-phone-error" class="submit-error"></span><br>
        </div>

        
        <input type="submit" value="Update Profile">

       
        <?php if ($message): ?>
            <p class="success-message"><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        
        <a class="back-dashboard" href="admin_dashboard.php">← Back to Dashboard</a>
    </form>
</div>

<script src="admin.js"></script>
</body>
</html>






