  <?php include 'header/main_header.php';?>
  <?php include 'sidebar/main_sidebar.php';?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage User Account</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage User Account</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
    
            <div class="card">
              <div class="card-header">
                 <button type="button" class="btn btn-primary float-sm-right" data-toggle="modal" data-target="#modal-user">
                 <i class="fa fa-plus"></i> Add User
                </button>
              </div>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-dark">
                  <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php 
                      $conn = new class_model();
                      $dep = $conn->fetchAll_admin_account();
                  ?>
                <?php foreach ($dep as $row) { ?>
                  <tr>

                    <td><?= $row['full_name']; ?></td>
                    <td><?= $row['username']; ?></td>
                    <td class="align-right">
                        <!-- <i class="fa fa-edit edit_D" style="color: blue" data-toggle="modal" data-target="#edit-department" data-id="<?= htmlentities($row['admin_id']); ?>"></i> | -->
                        <i class="fa fa-trash-alt delete_D" style="color: red; cursor:pointer;" data-toggle="modal" data-target="#delete-users" data-del="<?= htmlentities($row['admin_id']); ?>"></i>
                    </td>
                  </tr>
               <?php }?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<?php include 'modal/addusers.php';?>
 <?php include 'modal/delete_users.php';?>
 <script>
       $(document).ready(function() {   
           load_data();    
           var count = 1; 
           function load_data() {
               $(document).on('click', '.edit_D', function() {
                    var department_id = $(this).data("id");
                    console.log(department_id);
                      get_Id(department_id); //argument    
             
               });
            }

             function get_Id(department_id) {
                  $.ajax({
                      type: 'POST',
                      url: 'fetch_row/department_row.php',
                      data: {
                          department_id: department_id
                      },
                      dataType: 'json',
                      success: function(response) {
                      $('#edit_employeeid').val(response.department_id);
                      $('#edit_departmentname').val(response.department_name);
                      $('#edit_description').val(response.description);

                   }
                });
             }
       
       });
        
 </script>
  <script>
       $(document).ready(function() {   
           load_data();    
           var count = 1; 
           function load_data() {
               $(document).on('click', '.delete_D', function() {
                    var admin_id = $(this).data("del");
                    console.log(admin_id);
                      get_delId(admin_id); //argument    
             
               });
            }

             function get_delId(admin_id) {
                  $.ajax({
                      type: 'POST',
                      url: 'fetch_row/users_row.php',
                      data: {
                        admin_id: admin_id
                      },
                      dataType: 'json',
                      success: function(response2) {
                      $('#delete_users').val(response2.admin_id);
                      $('#delete_username').val(response2.full_name);
      
                   }
                });
             }
       
       });
        
 </script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
    });

  });
</script>
</body>
</html>
