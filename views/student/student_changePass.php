<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/student.css">
    <title>Change Password</title>
</head>
<body>
    
    <div class="container">
        <form action="" id="update_pass">
            <h2>Update Password</h2>
            <label for="">Old Password:</label><br>
            <input type="password" name="old_pass" id="old_pass" placeholder="Enter Old Pass"><br><br>
            <label for="">New Password:</label><br>
            <input type="password" name="new_pass" id="new_pass" placeholder="Enter new pass"><br><br>

            <input type="submit" value="submit">
        </form>
        <p>Go <a href="../../index.php">back</a></p>
    </div>

</body>
</html>