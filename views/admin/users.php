<!DOCTYPE HTML>
<html>
<body>

<?php
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
}
?>

<h2>Users</h2>

<form method="post" action="">
  User Name: <input type="text" name="name">
  <input type="submit" value="Add User">
</form>

<?php
if ($name != "") {
  echo "<h3>User Added:</h3>";
  echo $name;
}
?>

</body>
</html>
