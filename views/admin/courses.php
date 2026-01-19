<?php
session_start();

$course = "";
$message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course = $_POST["course"] ?? '';

    if(!empty($course)){
        $message = "Course Added: <strong>" . htmlspecialchars($course) . "</strong>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Course</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        .container form {
            max-width: 500px;
            padding: 40px 30px;
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
            margin-top: 15px;
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
    <form method="post" onsubmit="return validateAddCourse()">
        <h2 style="text-align:center; margin-bottom:25px;">Add Course</h2>

        <div class="input-group">
            <label for="course">Course Name</label>
            <input type="text" id="course" name="course" placeholder="Enter Course Name">
            <span id="course-error" class="submit-error"></span>
        </div>

        <input type="submit" value="Add Course">

        <?php if ($message): ?>
            <p class="success-message"><?php echo $message; ?></p>
        <?php endif; ?>

        <a class="back-dashboard" href="dashboard.php">← Back to Dashboard</a>
    </form>
</div>

<script>
function validateAddCourse() {
    let course = document.getElementById('course');
    let valid = true;

    if(course.value.trim() === "") {
        document.getElementById('course-error').innerText = "Enter course name";
        course.classList.add('error');
        valid = false;
    } else {
        document.getElementById('course-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        course.classList.remove('error');
        course.classList.add('valid');
    }

    return valid;
}
</script>

</body>
</html>

