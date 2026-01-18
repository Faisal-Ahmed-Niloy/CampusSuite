<!DOCTYPE HTML>
<html>
<body>

<?php
$course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $course = $_POST["course"];
}
?>

<h2>Courses</h2>

<form method="post" action="">
  Course Name: <input type="text" name="course">
  <input type="submit" value="Add Course">
</form>

<?php
if ($course != "") {
  echo "<h3>Course Added:</h3>";
  echo $course;
}
?>

</body>
</html>
