<?php
session_start();
	require_once 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username' && `password` = '$password' && `name` = 'Administrator' ") or die(mysqli_error());
	$valid = $query->num_rows;
	$fetch = $query->fetch_array();
	if($valid > 0){
		echo 'Success';
		$_SESSION['admin_id'] = $fetch['admin_id'];
		$_SESSION['name'] = $fetch['name'];
		// $_SESSION['student_id'] = $fetch['student_id'];
	}else{
		echo 'Error';
	}