<!DOCTYPE HTML>
<html>
<body>

<?php
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["old"] == "1234") {
        $msg = "Password Changed Successfully (Demo)";
    } else {
        $msg = "Old Password Incorrect";
    }
}
?>

<h2>Change Password</h2>

<form method="post">
Old Password: <input type="password" name="old"><br><br>
New Password: <input type="password" name="new"><br><br>
<input type="submit" value="Change">
</form>

<p><?php echo $msg; ?></p>

<a href="dashboard.php">Back</a>

</body>
</html>


