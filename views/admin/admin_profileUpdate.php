<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Admin Profile Update</title>
</head>
<body>

<div class="container">
    <h2>Update Admin Profile</h2>

    <form action="" id="admin_update">

        <label for="name">Name:</label>
        <input type="text" id="admin_name" name="admin_name"
               value="<?php echo $_SESSION['admin_name'] ?? ''; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="admin_email" name="admin_email"
               value="<?php echo $_SESSION['admin_email'] ?? ''; ?>" required>

        <label for="phone">Phone Number:</label>
        <input type="number" id="admin_phone" name="admin_phone"
               value="<?php echo $_SESSION['admin_phone'] ?? ''; ?>" required><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob_admin" name="dob_admin"
               value="<?php echo $_SESSION['admin_dob'] ?? ''; ?>" required><br><br>

        <label for="gender">Select Gender:</label>
        <input type="radio" name="gender" value="Male"
            <?php if (($_SESSION['admin_gender'] ?? '') == 'Male') echo 'checked'; ?>> Male

        <input type="radio" name="gender" value="Female"
            <?php if (($_SESSION['admin_gender'] ?? '') == 'Female') echo 'checked'; ?>> Female
        <br><br>

        <label for="password">New Password:</label>
        <input type="password" id="admin_pass" name="admin_pass"
               placeholder="Leave blank to keep current password"><br>

        <input type="submit" value="Update Profile"><br>

        <p>Back to <a href="admin_dashboard.php">Dashboard</a></p>
    </form>

    <p>Go <a href="../../index.php">back</a></p>
</div>

</body>
</html>
