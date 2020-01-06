<?php
	require_once 'connect.php';
	if(ISSET($_REQUEST['id'])){
		$conn->query("UPDATE `applicants` SET `status` = 'Approved' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
		header('location:applicants.php');
	}

	if(ISSET($_REQUEST['rejected_id'])){
		$conn->query("UPDATE `applicants` SET `status` = 'Rejected' WHERE `id` = '$_REQUEST[rejected_id]'") or die(mysqli_error());
		header('location:applicants.php');
	}
?>