<?php
  require_once "../model/class_model.php";

	if(ISSET($_POST)){
		$conn = new class_model();

		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $password_encrypted = md5($password);

		
		$add = $conn->add_users($fname, $username, $password_encrypted);
		if($add == TRUE){
		      echo '<div class="alert alert-success">Add Users Successfully!</div><script> setTimeout(function() {  location.replace("add_users.php"); }, 1000); </script>';
		    

		  }else{
		    echo '<div class="alert alert-danger">Add Users Failed!</div><script> setTimeout(function() {  location.replace("add_users.php"); }, 1000); </script>';

	
		}
	}

?>

