<?php
session_start();
session_destroy(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<div class="container">
    <h2>You have been logged out 👋</h2>
    <p>You successfully logged out from the admin panel.</p>

    
    <form action="admin_login.php" method="get">
        <input type="submit" value="Go to Login Page">
    </form>

    <p style="margin-top: 20px;">Go <a href="../../index.php">back to home</a></p>
</div>

</body>
</html>

