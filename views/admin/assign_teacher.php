<!DOCTYPE HTML>
<html>
<body>

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
</form>

<?php
if ($teacher != "" && $course != "") {
  echo "<h3>Assignment Details:</h3>";
  echo "Teacher: " . $teacher . "<br>";
  echo "Course: " . $course;
}
?>

</body>
</html>
