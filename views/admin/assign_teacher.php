<!DOCTYPE HTML>
<html>
<body>
<h2>Assign Teacher</h2>

<form method="post">
Teacher Name: <input type="text" name="teacher"><br><br>
Course Name: <input type="text" name="course"><br><br>
<input type="submit" value="Assign">
<?php
$teacher = $course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $teacher = $_POST["Teacher"];
  $course = $_POST["Course"];
}
?>


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

