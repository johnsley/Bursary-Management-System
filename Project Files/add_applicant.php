<?php
	require_once 'connect.php';
	if ($_POST['userPass'] == $_POST['userCoPass']) {
	$firstname = mysqli_escape_string($conn,$_POST['userFirstname']);
	$lastname = mysqli_escape_string($conn,$_POST['userLastname']);
	$email = mysqli_escape_string($conn,$_POST['userEmail']);
	$phone = mysqli_escape_string($conn,$_POST['userPhone']);
	$dob = mysqli_escape_string($conn, $_POST['userbod']);
	$gender = mysqli_escape_string($conn,$_POST['userGender']);
	$education = mysqli_escape_string($conn,$_POST['userEduLevel']);
	$school = mysqli_escape_string($conn,$_POST['userSchool']);
	$county = mysqli_escape_string($conn,$_POST['userCounty']);
	$const = mysqli_escape_string($conn,$_POST['userConst']);
	$password = mysqli_escape_string($conn,$_POST['userPass']);
	$status = 0;
	$q_check = $conn->query("SELECT * FROM `students` WHERE `email` = '$email'") or die(mysqli_error());
	$v_check = $q_check->num_rows;
	if($v_check > 0){
		echo 'Exist';
	}else{
		$query = $conn->query("INSERT INTO `students` VALUES('', '$firstname', '$lastname', '$email', '$phone', '$dob', '$gender', '$education', '$school', '$county', '$const', '$password', '$status')") or die(mysqli_error());
		if($query){
			echo "Success";
		}else{
			echo "Registration Failed!";
		}
	  }
	}else{
	echo "notmatch";
   }
