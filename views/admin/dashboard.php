<?php
session_start();

$total_students = 120;
$total_teachers = 30;
$total_courses = 15;
$total_departments = 5;

$user = "";
$course = "";
$teacher = "";
$assign_course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["user"])) {
        $user = $_POST["user"];
    }

    if (!empty($_POST["course"])) {
        $course = $_POST["course"];
    }

    if (!empty($_POST["teacher"]) && !empty($_POST["assign_course"])) {
        $teacher = $_POST["teacher"];
        $assign_course = $_POST["assign_course"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px 30px;
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }

        h2, h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        p, li {
            font-size: 16px;
            margin-bottom: 10px;
        }

        hr {
            margin: 25px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #999;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background: #141a34;
            color: #fff;
            padding: 12px 20px;
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
            margin-top: 10px;
        }

        span.submit-error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Admin Dashboard</h2>

    <p><b>Total Students:</b> <?php echo $total_students; ?></p>
    <p><b>Total Teachers:</b> <?php echo $total_teachers; ?></p>
    <p><b>Total Courses:</b> <?php echo $total_courses; ?></p>
    <p><b>Total Departments:</b> <?php echo $total_departments; ?></p>

    <hr>

    <h3>Recent Activities</h3>
    <ul>
        <li>New user added</li>
        <li>New course added</li>
        <li>Teacher assigned to course</li>
    </ul>

    <hr>

   
    <h3>Add User</h3>
    <form method="post" onsubmit="return validateUserForm()">
        <div class="form-group">
            <label>User Name</label>
            <input type="text" id="user" name="user" placeholder="Enter User Name">
            <span id="user-error" class="submit-error"></span>
        </div>
        <input type="submit" value="Add User">
        <?php if ($user != ""): ?>
            <p class="success-message">User Added: <?php echo htmlspecialchars($user); ?></p>
        <?php endif; ?>
    </form>

    <hr>

    
    <h3>Add Course</h3>
    <form method="post" onsubmit="return validateCourseForm()">
        <div class="form-group">
            <label>Course Name</label>
            <input type="text" id="course" name="course" placeholder="Enter Course Name">
            <span id="course-error" class="submit-error"></span>
        </div>
        <input type="submit" value="Add Course">
        <?php if ($course != ""): ?>
            <p class="success-message">Course Added: <?php echo htmlspecialchars($course); ?></p>
        <?php endif; ?>
    </form>

    <hr>

    
    <h3>Assign Teacher</h3>
    <form method="post" onsubmit="return validateAssignTeacherForm()">
        <div class="form-group">
            <label>Teacher Name</label>
            <input type="text" id="teacher" name="teacher" placeholder="Enter Teacher Name">
            <span id="teacher-error" class="submit-error"></span>
        </div>
        <div class="form-group">
            <label>Course Name</label>
            <input type="text" id="assign_course" name="assign_course" placeholder="Enter Course Name">
            <span id="assign-course-error" class="submit-error"></span>
        </div>
        <input type="submit" value="Assign Teacher">
        <?php if ($teacher != "" && $assign_course != ""): ?>
            <p class="success-message">Assigned: <?php echo htmlspecialchars($teacher); ?> → <?php echo htmlspecialchars($assign_course); ?></p>
        <?php endif; ?>
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

    function validateCourseForm() {
        let course = document.getElementById('course');
        if(course.value.trim() === "") {
            document.getElementById('course-error').innerText = "Enter course name";
            course.classList.add('error');
            return false;
        } else {
            document.getElementById('course-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
            course.classList.remove('error');
            course.classList.add('valid');
            return true;
        }
    }

    function validateAssignTeacherForm() {
        let teacher = document.getElementById('teacher');
        let assign_course = document.getElementById('assign_course');
        let valid = true;

        if(teacher.value.trim() === "") {
            document.getElementById('teacher-error').innerText = "Enter teacher name";
            teacher.classList.add('error');
            valid = false;
        } else {
            document.getElementById('teacher-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
            teacher.classList.remove('error');
            teacher.classList.add('valid');
        }

        if(assign_course.value.trim() === "") {
            document.getElementById('assign-course-error').innerText = "Enter course name";
            assign_course.classList.add('error');
            valid = false;
        } else {
            document.getElementById('assign-course-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
            assign_course.classList.remove('error');
            assign_course.classList.add('valid');
        }

        return valid;
    }
</script>

</body>
</html>




