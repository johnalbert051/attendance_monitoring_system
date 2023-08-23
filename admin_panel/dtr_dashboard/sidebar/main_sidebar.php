
    <style>
      body{
        font-family:"arial"  !important;
        box-sizing: border-box;
      }
      .main-sidebar{
        background: #1746A2;
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
  </style>
  
  <aside class="main-sidebar elevation-4 ">



    <!-- Sidebar -->
    <div class="sidebar ">
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
      <nav class="nav">
        <ul class="nav  nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open logo-img" >
            <a href="dashboard.php" class="nav-link">
              <p>
                <img src="../atec.png"width="180px" height="180px" alt="" class="img-logo">
              </p>
            </a>
         </li>
          <li class="nav-item has-treeview menu-open mb-2">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
           <li class="nav-item mb-2">
            <a href="manage_department.php" class="nav-link ">
              <i class="nav-icon fa fa-building"></i>
              <p>
                Manage Sections
              </p>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="manage_employee.php" class="nav-link">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>
                Manage Students
              </p>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="manage_schoolyear.php" class="nav-link">
              <i class="nav-icon 	fas fa-calendar-alt"></i>
              <p>
                Manage School Year
              </p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="manage_schedule.php" class="nav-link">
              <i class="nav-icon fa fa-user-clock"></i>
              <p>
           Student Time in / Out
              </p>
            </a>
          </li> -->
           <li class="nav-item mb-2">
            <a href="manage_attendance.php" class="nav-link">
              <i class="nav-icon fa fa-clock"></i>
              <p>
                View Attendance
              </p>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="add_users.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i> 
              <p>
                Users
              </p>
            </a>
          </li>
           <li class="nav-item mb-2">
            <a href="manage_report.php" class="nav-link">
              <i class="nav-icon fa fa-print"></i>
              <p>
                Attendnace Report
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
