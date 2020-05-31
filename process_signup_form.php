<?php 

  $db = mysqli_connect('localhost', 'root', '', 'atu_ilms_db');

  if (isset($_POST['userid_check'])) {
  	$username = $_POST['userid'];
  	$sql = "SELECT * FROM users WHERE `user_id` = '$userid'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }

//   if (isset($_POST['email_check'])) {
//   	$email = $_POST['email'];
//   	$sql = "SELECT * FROM users WHERE email='$email'";
//   	$results = mysqli_query($db, $sql);
//   	if (mysqli_num_rows($results) > 0) {
//   	  echo "taken";	
//   	}else{
//   	  echo 'not_taken';
//   	}
//   	exit();
//   }

  if (isset($_POST['save'])) {
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
  	$userid = $_POST['user_id'];
  	//$email = $_POST['email'];
  	$password = $_POST['password'];
  	$sql = "SELECT * FROM users WHERE `user_id` = '$userid'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "exists";	
  	  exit();
  	}else{
  	  $query = "INSERT INTO users (first_name, last_name, `user_id`, `password`) 
  	       	VALUES ('$firstname', '$lastname', '$userid', '".md5($password)."')";
  	  $results = mysqli_query($db, $query);
  	  echo 'Saved!';
  	  exit();
  	}
  }

?>