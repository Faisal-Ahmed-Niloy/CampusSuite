<!DOCTYPE HTML>
<html>
<body>

<h2>Add Course</h2>

<form method="post">
Course Name: <input type="text" name="course">
<input type="submit" value="Add Course">
</form>

<?php
if (!empty($_POST["course"])) {
    echo "Course Added: " . $_POST["course"];
}
?>

<br><br>
<a href="dashboard.php">Back</a>

</body>
</html>

