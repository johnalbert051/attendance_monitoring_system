<?php
  require_once "../model/class_model.php";


	if(ISSET($_POST)){
		$conn = new class_model();

	    $admin_id = trim($_POST['admin_id']);

		$del = $conn->delete_users($admin_id);
		if($del == TRUE){
		      echo '<div class="alert alert-success">Delete Users Successfully!</div><script> setTimeout(function() {  location.replace("add_users.php"); }, 1000); </script>';
		    

		  }else{
		    echo '<div class="alert alert-danger">Delete Users Failed!</div><script> setTimeout(function() {  location.replace("add_users.php"); }, 1000); </script>';

	
		}
	}

?>

