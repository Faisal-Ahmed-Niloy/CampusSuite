<!DOCTYPE HTML>
<html>
<body>

<?php
// Fixed values (demo purpose)
$total_students = 120;
$total_teachers = 30;
$total_courses = 15;
$total_departments = 5;

// Form values
$user = "";
$course = "";
$teacher = "";
$assign_course = "";

// Handle form submissions
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

<h2>Admin Dashboard</h2>

<!-- Dashboard Counts -->
<p>Total Students: <?php echo $total_students; ?></p>
<p>Total Teachers: <?php echo $total_teachers; ?></p>
<p>Total Courses: <?php echo $total_courses; ?></p>
<p>Total Departments: <?php echo $total_departments; ?></p>

<hr>

<!-- Recent Activities -->
<h3>Recent Activities</h3>
<ul>
  <li>New user added</li>
  <li>New course added</li>
  <li>Teacher assigned to course</li>
</ul>

<hr>

<!-- Add User -->
<h3>Add User</h3>
<form method="post" action="">
  User Name: <input type="text" name="user">
  <input type="submit" value="Add User">
</form>

<?php
if ($user != "") {
  echo "<p><b>User Added:</b> $user</p>";
}
?>

<hr>

<!-- Add Course -->
<h3>Add Course</h3>
<form method="post" action="">
  Course Name: <input type="text" name="course">
  <input type="submit" value="Add Course">
</form>

<?php
if ($course != "") {
  echo "<p><b>Course Added:</b> $course</p>";
}
?>

<hr>

<!-- Assign Teacher -->
<h3>Assign Teacher</h3>
<form method="post" action="">
  Teacher Name: <input type="text" name="teacher"><br><br>
  Course Name: <input type="text" name="assign_course"><br><br>
  <input type="submit" value="Assign">
</form>

<?php
if ($teacher != "" && $assign_course != "") {
  echo "<p><b>Assigned:</b> $teacher → $assign_course</p>";
}
?>

</body>
</html>


<<<<<<< HEAD





=======
>>>>>>> 6c29d7e12d50935c8ea06f555170b29a486c284b
