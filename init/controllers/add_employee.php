<?php
	require_once "../model/class_model.php";
    include "phpqrcode/qrlib.php";

	if(ISSET($_POST)){
		$conn = new class_model();

		$employee_idno = trim($_POST['employee_idno']);
		$password = trim($_POST['password']);
	    $first_name = trim(ucfirst($_POST['first_name']));
		$middle_name = trim(ucfirst($_POST['middle_name']));
	    $last_name = trim(ucfirst($_POST['last_name']));
	    $gender = trim($_POST['gender']);
		$school_year = trim($_POST['school_year']);
	    $department = trim($_POST['department']);
	    $qr_code = trim($_POST['qr_code']);
	     function rand_string($length) {
		    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		    return substr(str_shuffle($chars),0,$length);
	    }

	    $pathDir = "../../qrcode_images/";
        $codeContents = ''.rand_string(8); 
        QRcode::png($codeContents, $pathDir.''.$employee_idno.'.png', QR_ECLEVEL_L, 5);



		
		$add = $conn->add_employee($employee_idno, $password, $first_name, $middle_name, $last_name,  $gender,$school_year, $department, $codeContents);
		if($add == TRUE){
		      echo '<div class="alert alert-success">Add Employee Successfully!</div><script> setTimeout(function() {  location.replace("manage_employee.php"); }, 1000); </script>';
		    

		  }else{
		    echo '<div class="alert alert-danger">Add Employee Failed!</div><script> setTimeout(function() {  location.replace("manage_employee.php"); }, 1000); </script>';

	
		}
	}

?>

