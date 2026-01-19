<?php
session_start();

// Demo existing data (normally comes from database)
$name = "Admin Name";
$email = "admin@email.com";
$phone = "0123456789";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["admin_name"];
    $email = $_POST["admin_email"];
    $phone = $_POST["admin_phone"];
    $message = "Profile Updated Successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Profile Update</title>
</head>
<body>

<div class="container">
    <h2>Admin Profile Update</h2>

    <form method="post">

        <label>Name:</label><br>
        <input type="text" name="admin_name" value="<?php echo $name; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="admin_email" value="<?php echo $email; ?>" required><br><br>

        <label>Phone Number:</label><br>
        <input type="number" name="admin_phone" value="<?php echo $phone; ?>" required><br><br>

        <!-- <label>Date of Birth:</label><br> -->
        <!-- <input type="date" name="admin_dob" value="<?php echo $dob; ?>" required><br><br> -->

        <!-- <label>Select Gender:</label><br> -->
        <!-- <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male   -->
        <!-- <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female -->
        <br><br>

        <!-- <label>Password:</label><br> -->
        <!-- <input type="password" name="admin_pass" placeholder="Update Password"><br><br> -->

        <input type="submit" value="Update Profile">
    </form>

    <p style="color:green;"><?php echo $message; ?></p>

    <p><a href="dashboard.php">Back to Dashboard</a></p>
</div>

</body>
</html>


