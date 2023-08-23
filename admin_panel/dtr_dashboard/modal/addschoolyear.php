
<div class="modal fade" id="modal-schoolyear">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-building"></i> New School Year</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
        <div id="emp"></div>
        <form method = "POST" autocomplete="off">

                <div class = "form-group">
                  <label>School Year:</label>
                  <input type = "text" id="school_year" alt="school_year" class = "form-control" />
                </div>

        </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add-schoolyear">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

      <script>
          document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#add-schoolyear');
              btn.addEventListener('click', () => {

                  const school_year = document.querySelector('input[alt=school_year]').value;
                 

                  var data = new FormData(this.form);

                  data.append('school_year',school_year);
                  


              if (school_year === ''){
                      $('#emp').html('<div class="alert alert-danger"> Required All Fields!</div>');
                    }else{
                       $.ajax({
                        url: '../../init/controllers/add_schoolyear.php',
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
