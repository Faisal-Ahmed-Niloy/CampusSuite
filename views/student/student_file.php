<?php
session_start();
if (!isset($_SESSION['isLoggedIn'])) {
	header("Location: student_login.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
    <?php include_once "../header.php" ?>    

    <?php include_once "../footer.php" ?>
</body>
</html>