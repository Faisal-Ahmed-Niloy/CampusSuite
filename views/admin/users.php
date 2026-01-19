<!DOCTYPE HTML>
<html>
<body>

<h2>Manage Users</h2>

<form method="post">
User Name: <input type="text" name="user">
<input type="submit" value="Add User">
</form>

<?php

if (!empty($_POST["user"])) {
    echo "User Added: " . $_POST["user"];
}
?>

<br><br>
<a href="dashboard.php">Back</a>

</body>
</html>





