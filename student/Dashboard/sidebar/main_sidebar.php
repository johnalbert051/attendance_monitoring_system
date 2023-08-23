
  
  <style>
      body{
        font-family:"arial"  !important;
        box-sizing: border-box;
      }
      .main-sidebar{
        background:#1746A2;
      }
    .img-logo{
      border-radius:50%;
    }
    .logo-img{

      text-align:center;
    }
    .nav a{
      font-size:19px;
      color:#fff !important;
    }
    .nav a:hover{
      color:#6c757d !important;
    }
    .img-logo{
      border-radius:50%;
    }
    .logo-img{

      text-align:center;
    }
  </style>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
<!--       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
 -->
      <!-- Sidebar Menu -->
      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item  logo-img" >
            <a href="dashboard.php" class="nav-link">
              <p>
                <img src="../../admin_panel/atec.png"width="130px" height="130px" alt="" class="img-logo">
              </p>
            </a>
         </li>
          <li class="nav-item has-treeview">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="employee.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                 Information
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="attendance.php" class="nav-link">
              <i class="nav-icon fa fa-clock"></i>
              <p>
                 Attendance
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
