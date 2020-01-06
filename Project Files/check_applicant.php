<?php
session_start();
	require_once 'connect.php';
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = $conn->query("SELECT * FROM `students` WHERE `email` = '$email' && `password` = '$password'") or die(mysqli_error());
	$valid = $query->num_rows;
	$fetch = $query->fetch_array();
	if($valid > 0){
		$status = $fetch['status'];
		if($status == 0){
          echo 'Student';
		}else if($status == 1){
          echo 'Admin';
		}
		$_SESSION['id'] = $fetch['id'];
		$_SESSION['firstname'] = $fetch['firstname'];
		$_SESSION['lastname'] = $fetch['lastname'];
		$_SESSION['county'] = $fetch['county'];
		$_SESSION['const'] = $fetch['const'];
	}else{
		echo 'Error';
	}