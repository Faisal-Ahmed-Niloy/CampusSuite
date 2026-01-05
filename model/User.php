<?php 

function matchCredentials($username, $password) {
	if ($username === "admin" and $password === "admin") {
		return true;
	}

	return false;
}

?>