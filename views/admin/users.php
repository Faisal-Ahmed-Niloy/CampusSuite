<?php
session_start();

$user = "";
$message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"] ?? '';

    if(!empty($user)){
        $message = "User Added: <strong>" . htmlspecialchars($user) . "</strong>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        .container form {
            max-width: 500px;
            padding: 40px 30px;
            margin: 50px auto;
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #999;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background: #141a34;
            color: #fff;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: #2d8cf0;
        }

        p.success-message {
            color: seagreen;
            font-weight: 600;
            text-align: center;
            margin-top: 15px;
        }

        a.back-dashboard {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #2d8cf0;
            text-decoration: none;
            font-weight: 500;
        }

        a.back-dashboard:hover {
            text-decoration: underline;
        }

        span.submit-error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="post" onsubmit="return validateUserForm()">
        <h2 style="text-align:center; margin-bottom:25px;">Manage Users</h2>

        <div class="input-group">
            <label for="user">User Name</label>
            <input type="text" id="user" name="user" placeholder="Enter User Name">
            <span id="user-error" class="submit-error"></span>
        </div>

        <input type="submit" value="Add User">

        <?php if ($message): ?>
            <p class="success-message"><?php echo $message; ?></p>
        <?php endif; ?>

        <a class="back-dashboard" href="dashboard.php">← Back to Dashboard</a>
    </form>
</div>

<script>
function validateUserForm() {
    let user = document.getElementById('user');
    if(user.value.trim() === "") {
        document.getElementById('user-error').innerText = "Enter user name";
        user.classList.add('error');
        return false;
    } else {
        document.getElementById('user-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        user.classList.remove('error');
        user.classList.add('valid');
        return true;
    }
}
</script>

</body>
</html>






