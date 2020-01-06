<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `bursaries` WHERE `activity_id` = '$_REQUEST[activity_id]'") or die(mysqli_error());
	header('location:home.php');
?>