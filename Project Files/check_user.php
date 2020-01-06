<?php
session_start();
	require_once 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = $conn->query("SELECT * FROM `students` WHERE `user_name` = '$username' && `password` = '$password'") or die(mysqli_error());
	$valid = $query->num_rows;
	$fetch = $query->fetch_array();
	if($valid > 0){
		echo 'Success';
		$_SESSION['student_id'] = $fetch['id'];
		$_SESSION['firstname'] = $fetch['first_name'];
		$_SESSION['admin_id'] = $fetch['admin_id'];
	}else{
		echo 'Error';
	}