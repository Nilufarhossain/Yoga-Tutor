<?php 
session_start(); 
include "include/connectToDB.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {

		header("Location: Register.php?error=User Name is required&$user_data");
			exit();
		}
		else if(empty($pass)){
			header("Location: Register.php?error=Password is required&$user_data");
			exit();
		}
		else if(empty($re_pass)){
			header("Location: Register.php?error=Re Password is required&$user_data");
			exit();
		}

		else if(empty($name)){
			header("Location: Register.php?error=Name is required&$user_data");
			exit();
		}

		else if($pass !== $re_pass){
			header("Location: Register.php?error=The confirmation password  does not match&$user_data");
			exit();
		}

		else{

			// hashing the password
			$pass = md5($pass);

			$sql = "SELECT * FROM user WHERE user_name='$uname' ";
			$result = mysqli_query($link, $sql);

			if (mysqli_num_rows($result) > 0) {
				header("Location: Register.php?error=The username is taken try another&$user_data");
				exit();
			}
			else {
				$sql2 = "INSERT INTO user(user_name, password, Name) VALUES('$uname', '$pass', '$name')";
				$result2 = mysqli_query($link, $sql2);
				if ($result2) {
					header("Location: Register.php?success=Your account has been created successfully");
					exit();
				}
				else {
					header("Location: Register.php?error=unknown error occurred&$user_data");
					exit();
				}
			}
		}
	
}
else{
	header("Location: Register.php");
	exit();
}