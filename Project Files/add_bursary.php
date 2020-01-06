<?php
    session_start();
	require_once 'connect.php';
	if(ISSET($_POST['save_bursary'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$county = $_POST['county'];
		$const = $_POST['const'];
		$level = $_POST['level'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$month = date("M", strtotime($_POST['start']));
		$year = date("Y", strtotime($_POST['start']));
		$conn->query("INSERT INTO `bursaries` VALUES('', '$title', '$description', '$county', '$const', '$level', '$start', '$end', '$month', '$year')") or die(mysqli_error());
		header('location: home.php');
	}
?>