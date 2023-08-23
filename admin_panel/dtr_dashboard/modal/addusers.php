
<div class="modal fade" id="modal-user">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-building"></i> New Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
        <div id="emp"></div>
        <form method = "POST" autocomplete="off">

                <div class = "form-group">
                  <label>Full Name:</label>
                  <input type = "text" id="fname" alt="fname" class = "form-control" />
                </div>
                <div class = "form-group">
                  <label>Username:</label>
                  <input type = "text" id="username" alt="username" class = "form-control" />
                </div>
                <div class = "form-group">
                  <label>Password:</label>
                  <input type = "password" id="password" alt="password" class = "form-control" />
                </div>           

        </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add-depart">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

      <script>
          document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#add-depart');
              btn.addEventListener('click', () => {

                const fname = document.querySelector('input[alt=fname]').value;
                const username = document.querySelector('input[alt=username]').value;
                const password = document.querySelector('input[alt=password]').value;
  


                  var data = new FormData(this.form);

                  data.append('fname', fname);
                  data.append('username', username);
                  data.append('password', password);



              if (fname === '' ||  username ==='' ||  password ===''){
                      $('#emp').html('<div class="alert alert-danger"> Required All Fields!</div>');
                    }else{
                       $.ajax({
                        url: '../../init/controllers/addusers.php',
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
