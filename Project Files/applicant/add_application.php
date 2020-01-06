<?php
session_start();
require_once '../connect.php';
if(ISSET($_POST['save_application'])){
	$parents = $_POST['parents'];
    $bank = $_POST['bank'];
    $b_query = $conn->query("SELECT `title` FROM `bursaries` WHERE `activity_id` = '$_REQUEST[activity_id]'") or die(mysqli_error());
    $b_fetch = $b_query->fetch_array();
    $bursary_title = $b_fetch['title'];
    $s_query = $conn->query("SELECT * FROM `students` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
    $s_fetch = $s_query->fetch_array();
    $firstname = $s_fetch['firstname'];
    $lastname = $s_fetch['lastname'];
    $email = $s_fetch['email'];
    $phone = $s_fetch['phone'];
    $gender = $s_fetch['gender'];
    $edulevel = $s_fetch['edulevel'];
    $school = $s_fetch['school'];
    $county = $s_fetch['county'];
    $const = $s_fetch['const'];

    if(empty($_FILES['image']['tmp_name'])){
            $conn->query("INSERT INTO `applicants` VALUES('', '$firstname', '$lastname', '$email', '$phone', '$gender', '$edulevel', '$school', '$county', '$const', '$parents','', '$bursary_title', '$bank', 'pending', '$_REQUEST[activity_id]', '$_SESSION[id]')") or die(mysqli_error());
             header("location:index.php");   
    }else{ 
    $location = "verify/".$_FILES["image"]["name"];
    if(file_exists($location)){
        echo "There is such a file. Please select another one!";
    }else{
    move_uploaded_file($_FILES["image"]["tmp_name"],"verify/".$_FILES["image"]["name"]);
    
    $conn->query("INSERT INTO `applicants` VALUES('', '$firstname', '$lastname', '$email', '$phone', '$gender', '$edulevel', '$school', '$county', '$const', '$parents', '$location', '$bursary_title', '$bank', 'pending', '$_REQUEST[activity_id]', '$_SESSION[id]')") or die(mysqli_error());
         header("location:index.php");
        }
     
    }
  }	
?>