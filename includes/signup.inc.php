<?php

if (isset($_POST['signup-submit'])) {
	
	require 'dbh.inc.php';

	$name = $_POST['fullname'];
	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];

	if (empty($name) || empty($username) || empty($email) || empty($password)) {
		header("Location: ../signup.php?error=emptyfields");
		exit();
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalidmail&uid");
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidmail");
		exit();
	} 
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invaliduid");
		exit();
	} 
	else {

		$sql = "SELECT uidUsers, emailUsers FROM users WHERE uidUsers=? OR emailUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "ss", $username, $email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: ../signup.php?error=usertakenoremailtaken");
				exit();
			}


			else {

				$sql = "INSERT INTO users (nameUsers, uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../signup.php?error=sqlerror");
					exit();
				}	
				else {
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../index.php?signup=success");
					exit();
				}
				
			}
		}

	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else {
	header("Location:../signup.php?");
	exit();
}