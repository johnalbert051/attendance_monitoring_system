  <?php 

       error_reporting(0);

       include 'init/model/config/connection2.php';
      if(isset($_POST['employee_qrcode'])){

            date_default_timezone_set("asia/manila");
             $emp = trim($_POST['employee_qrcode']);
             $first_name =  trim($row['first_name']);
             $date = date('Y-m-d');
            //$time = date('h:i A');
             $time =  date('h:i:A', strtotime("+0 HOURS"));
             $stat = 0;
             $stat2 = 1;


            $stmt1 = $conn->prepare("SELECT * FROM tbl_employee WHERE qr_code = ? AND first_name = ?");
            $stmt1->bind_param("ss", $emp,$first_name);
            $stmt1->execute();
            $result1 = $stmt1->get_result();


          if($result1->num_rows < 0){
              echo "<div class='alert alert-warning' role='alert' style='font-size:18px'><p><b><i class='fas fa-exclamation-triangle'></i>  Your QR Code does not register</b></p></div>";

          }else{
          
            $stmt2 = $conn->prepare("SELECT * FROM tbl_attendance WHERE employee_qrcode = ? AND logdate = ? AND status = '1'") or die($conn->error);
            $stmt2->bind_param("ss", $emp, $date);
            $stmt2->execute();
            $result2 = $stmt2->get_result();

          if($result2->num_rows > 0){

            $query = $conn->prepare("UPDATE tbl_attendance set time_out='$time', status='1' WHERE employee_qrcode='$emp' AND  logdate='$date' ORDER BY attendance_id DESC");
            $result = $query->execute();
            if($result === TRUE){

              echo "<div class='alert alert-danger' role='alert' style='font-size:22px'><h1><i class='fa fa-clock'></i>  Time Out</h1>
              <h1>Your Time Out: </1> ".$time." <h4><b> SUCCESSFULLY TIME OUT!</h4></b></div>";

              // if(!isset($_POST['time_in'])){
              //   echo "<div class='alert alert-warning' role='alert' style='font-size:18px'><p><b><i class='fas fa-exclamation-triangle'></i>  You're Already Time Out</b></p></div>";
              // }
            }
            else{
              echo "<div class='alert alert-warning' role='alert' style='font-size:18px'><p><b><i class='fas fa-exclamation-triangle'></i>  You're Already Time Out</b></p></div>";  
           }
          }
          else{
        
              $stmt = $conn->prepare("INSERT INTO tbl_attendance(employee_qrcode,first_name,time_in,logdate, status)
               VALUES ('$emp','$first_name','$time','$date','$stat2')");
              $result = $stmt->execute();
              if($result === TRUE){
                echo "<div class='alert alert-success' role='alert' style='font-size:22px'><h1><i class='fa fa-clock'></i>  Time In</h1>
                <h1>Your Time In: </1> ".$time." <h2><b> SUCCESSFULLY TIME IN!</h2></b></div>";

              }
              else{
                 echo "<div class='alert alert-danger' role='alert'>Error</div>";  
              }

           }

        }

     }
       $conn->close();

 ?>