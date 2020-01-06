<?php
	require_once 'connect.php';
	if(ISSET($_POST['update_bursary'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$county = $_POST['county'];
		$const = $_POST['const'];
		$level = $_POST['level'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$month = date("M", strtotime($_POST['start']));
		$year = date("Y", strtotime($_POST['start']));
		$conn->query("UPDATE `bursaries` SET `title` = '$title', `description` = '$description', `county` = '$county', `const` = '$const', `level` = '$level', `start` = '$start', `end` = '$end', `month` = '$month', `year` = '$year' WHERE `activity_id` = '$_REQUEST[activity_id]'") or die(mysqli_error());
		header('location:home.php');
	}
?>