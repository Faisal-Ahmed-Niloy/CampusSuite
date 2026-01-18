<!DOCTYPE HTML>  
<html>
<head>
<style>
.error { color: #3300ff; }
</style>
</head>
<body>  

<?php
// Define variables and set empty values
$nameErr = $emailErr = $phoneErr = "";
$name = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Name validation
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  // Email validation
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  // Phone validation
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }
}

// Clean input function
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Admin Profile Update</h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  Email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Phone: <input type="text" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Update Profile">  
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr=="" && $emailErr=="" && $phoneErr=="") {
  echo "<h2>Updated Profile:</h2>";
  echo "Name: " . $name . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Phone: " . $phone;
}
?>

</body>
</html>
