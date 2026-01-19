<!DOCTYPE HTML>
<html>
<body>

<<<<<<< HEAD
<h2>Assign Teacher</h2>

<form method="post">
Teacher Name: <input type="text" name="teacher"><br><br>
Course Name: <input type="text" name="course"><br><br>
<input type="submit" value="Assign">
=======
<?php
$teacher = $course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $teacher = $_POST["Teacher"];
  $course = $_POST["Course"];
}
?>

<h2>Assign Teacher</h2>

<form method="post" action="">
  Teacher Name: <input type="text" name="Teacher"><br><br>
  Course Name: <input type="text" name="Course"><br><br>
  <input type="submit" value="Assign">
>>>>>>> 6c29d7e12d50935c8ea06f555170b29a486c284b
</form>

<?php
if (!empty($_POST["teacher"]) && !empty($_POST["course"])) {
    echo "Teacher " . $_POST["teacher"] . " assigned to " . $_POST["course"];
}
?>

<br><br>
<a href="dashboard.php">Back</a>

</body>
</html>

