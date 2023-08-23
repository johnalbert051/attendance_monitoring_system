<?php
  require_once "../model/class_model.php";

	if(ISSET($_POST)){
		$conn = new class_model();

		$school_year = trim($_POST['school_year']);
		
		$add = $conn->add_schoolyear($school_year);
		if($add == TRUE){
		      echo '<div class="alert alert-success">Add School Year Successfully!</div><script> setTimeout(function() {  location.replace("manage_schoolyear.php"); }, 1000); </script>';
		    

		  }else{
		    echo '<div class="alert alert-danger">Add Department Failed!</div><script> setTimeout(function() {  location.replace("manage_schoolyear.php"); }, 1000); </script>';

	
		}
	}

?>

