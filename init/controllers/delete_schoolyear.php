<?php
  require_once "../model/class_model.php";


	if(ISSET($_POST)){
		$conn = new class_model();

	    $id = trim($_POST['id']);

		$del = $conn->delete_schoolyear($id);
		if($del == TRUE){
		      echo '<div class="alert alert-success">Delete School year Successfully!</div><script> setTimeout(function() {  location.replace("manage_schoolyear.php"); }, 1000); </script>';
		    

		  }else{
		    echo '<div class="alert alert-danger">Delete Users Failed!</div><script> setTimeout(function() {  location.replace("manage_schoolyear.php"); }, 1000); </script>';

	
		}
	}

?>

