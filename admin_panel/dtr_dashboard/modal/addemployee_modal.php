
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-user"></i> New Student </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
        <div id="emp"></div>
        <form method = "POST" autocomplete="off">
                <?php 
                  $digits = 6;
                  $newNum = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
                ?>
         
              <div class = "form-group">
                  <label>Student ID No.:</label>
                  <input type = "number"  id = "employee_idno" alt="employee_idno" placeholder="Enter ID No."  class = "form-control"/>
                </div>
                  <div class = "form-group">
                  <label>Password:</label>
                  <input type = "password"  id = "password" alt="password"  maxlength="15" minlength="6" class = "form-control" placeholder="atleast 6 digit" />
                </div>
                <div class = "form-group">
                  <label>Firstname:</label>
                  <input type = "text" id="first_name" alt="first_name" placeholder="First Name" class = "form-control" />
                </div>
                <div class = "form-group">
                  <label>Middlename:</label>
                  <input type = "text"  placeholder = "(Optional)" id="middle_name" alt="middle_name" class = "form-control" />
                </div>
                <div class = "form-group">
                  <label>Lastname:</label>
                  <input type = "text" id="last_name" alt="last_name"  placeholder="Last Name" class = "form-control" />
                </div>
                <div class = "form-group">
                <label>Gender:</label>
                <select class = "form-control" id = "gender">
                   <option value = "">&larr; Select Gender &rarr;</option>
                    <option value = "Male">Male</option>
                    <option value = "Female">Female</option>
                </select>
                </div>
                <div class = "form-group">
                  <label> School Year: </label>
                <select class = "form-control" id = "school_year">
                  <option value="">&larr; Select School Year Option&rarr;</option>
                                
                  <?php 
                    include '../../init/model/config/connection2.php';
                    $sql = "SELECT school_year FROM `school_year`";
                    $stmt = $conn->prepare($sql); 
                    $stmt->execute();
                    $result = $stmt->get_result();
                    foreach ($result as $row) {
                  ?>
                  <option value="<?php echo $row['school_year'] ?>"><?php echo $row['school_year'] ?></option>
                 <?php } ?>
                </select>

                </div>

                <div class = "form-group">
                  <label> Section: </label>
                <select class = "form-control" id = "department">
                  <option value="">&larr; Select Section Option &rarr;</option>
                                
                  <?php 
                    include '../../init/model/config/connection2.php';
                    $sql = "SELECT department_name FROM `tbl_department`";
                    $stmt = $conn->prepare($sql); 
                    $stmt->execute();
                    $result = $stmt->get_result();
                    foreach ($result as $row) {
                  ?>
                  <option value="<?php echo $row['department_name'] ?>"><?php echo $row['department_name'] ?></option>
                 <?php } ?>
                </select>

                </div>
        </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add-employee">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

      <script>
          document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#add-employee');
              btn.addEventListener('click', () => {

                  const employee_idno = document.querySelector('input[alt=employee_idno]').value;
                  const password = document.querySelector('input[alt=password]').value;
                  const first_name = document.querySelector('input[alt=first_name]').value;
                  const middle_name = document.querySelector('input[alt=middle_name]').value;
                  const last_name = document.querySelector('input[alt=last_name]').value;
                  const gender = $('#gender option:selected').val();
                  const school_year = $('#school_year option:selected').val();
                  const department = $('#department option:selected').val();
                  
                  


                  var data = new FormData(this.form);

                  data.append('employee_idno', employee_idno);
                  data.append('password', password);
                  data.append('first_name', first_name);
                  data.append('middle_name', middle_name);
                  data.append('last_name', last_name);
                  data.append('gender', gender);
                  data.append('school_year', school_year);
                  data.append('department', department);
                  
                  


              if (first_name === '' ||  last_name ===''){
                      $('#emp').html('<div class="alert alert-danger"> Required All Fields!</div>');
                    }else{
                       $.ajax({
                        url: '../../init/controllers/add_employee.php',
                          type: "POST",
                          data: data,
                          processData: false,
                          contentType: false,
                          async: false,
                          cache: false,
                        success: function(response) {
                          $("#emp").html(response);
                           window.scrollTo(0, 0);
                          },
                          error: function(response) {
                            console.log("Failed");
                          }
                      });
                   }

              });
          });
      </script>
