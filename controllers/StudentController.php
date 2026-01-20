<?php 

session_start();

$method = $_SERVER['REQUEST_METHOD'];
if ($method === "POST") {
	$username = $_POST['student_name'];
	$password = $_POST['student_pass'];
	$_SESSION['student_usernameErrMsg'] = "";
	$_SESSION['student_username'] = "";
	$_SESSION['student_passwordErrMsg'] = "";
	$isValid = true;

	if (empty($username)) {
		$_SESSION['student_usernameErrMsg'] = "Username is empty";
		$isValid = false;
	}
	else {
		$_SESSION['student_username'] = $username;
	}
	if (empty($password)) {
		$_SESSION['student_passwordErrMsg'] = "Password is empty";
		$isValid = false;
	}

	if ($isValid) {
		$_SESSION['isLoggedIn'] = true;
		header("Location: ../views/student/dashboard.php");
	}
	else {
		header("Location: ../views/student/student_login.php");
	}
} 
else {
	echo "Something went wrong. Please contact the admin";
}

?>