<?php
	require_once 'connect.php';
	if(ISSET($_POST['save_admin'])){	
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstName'];
		$lastname = $_POST['lastName'];
		$a_query = $conn->query("SELECT * FROM `students` WHERE `email` = '$email'") or die(mysqli_error());
		$a_valid = $a_query->num_rows;
		if($a_valid > 0){
			echo "<script>alert('Email already taken')</script>";
			echo "<script>window.location = 'adminAcc.php'</script>";
		}else{
			$conn->query("INSERT INTO `students` VALUES('', '$firstname', '$lastname', '$email', '', '', '', '', '', '', '$password', '1')") or die(mysqli_error());
			header('location:adminAcc.php');
		}
	}	
?>