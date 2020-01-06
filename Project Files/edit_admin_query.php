<?php
	require_once 'connect.php';
	if(ISSET($_POST['update_admin'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$q_admin = $conn->query("SELECT * FROM `students` WHERE `email` = '$email'") or die(mysqli_error());
		$v_admin = $q_admin->num_rows;
		if($v_admin > 0){
			echo '<script>alert("Email already taken");</script>';
			echo '<script>window.location = "edit_admin.php?id=" +'.$_REQUEST['id'].'</script>';
		}else{
			$conn->query("UPDATE `students` SET `email` = '$email', `password` = '$password', `firstname` = '$firstname', `lastname` = '$lastname' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
			header('location:adminAcc.php');
		}
	}
?>