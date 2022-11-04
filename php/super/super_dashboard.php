<?php 
   session_start();
   include "../db_conn.php";
      if (isset($_SESSION['username']) && isset($_SESSION['id'])) { 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Classrooms System</title>
<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<body class="hold-transition layout-top-nav">


  <nav class="main-header navbar navbar-expand-md navbar-light" style="background: #2E3191;">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="images/logo-wide2.png" class="brand-image" alt="">
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
         
            </ul>
          </li>
        </ul>

       
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

     <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-envelope" style="color: white;"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="images/3.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
  
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="images/user-default.png" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline" style="color: white"><?php echo $_SESSION['username'];?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="images/user-default.png" class="img-circle elevation-2" alt="User Image">

            <p>
              ADMIN <?php echo $_SESSION['username'];?>
              <small>New User</small>
            </p>
          </li>
      
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="../logout.php" class="btn btn-primary btn-flat float-right"><i class="fa fa-power-off"></i> Logout</a>
          </li>
        </ul>
      </li> 
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container">
<div class="row mb-2">


</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
<div class="container">
  
<div class="row">
  <div class="col-lg-3">
   <div class="list-group">
      <a href="admin_dashboard.php" class="list-group-item list-group-item-action active" style="background: #2E3191;font-family: Century Gothic;font-weight: 600">
       <i class="fas fa-tachometer-alt"></i> DASHBOARD
      </a>
      
      <a href="all-students.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> ALL STUDENTS <span class="right badge badge-danger">New</span></a>

      <a href="all-teachers.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> ALL TEACHERS</a>

       <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-book"></i> CLASSROOMS</a>
     
      <a href="subjects.php" class="list-group-item list-group-item-action"><i class="fa fa-book"></i> SUBJECTS</a>
      
      <a href="subjects.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-calendar-alt"></i> SCHOOL CALENDAR</a>

      <a href="all_users.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-user-alt"></i> ALL USERS</a>
  
    </div>

  
  </div>
  <!-- /.col-md-6 -->

  <div class="col-lg-9">
    <h1 ><a href="admin_dashboard.php" style="color: #2E3191">W<small>ELCOME</small></a> <small>
      <?php echo $_SESSION['username']; ?></small></h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin_dashboard.php">DASHBOARD</a></li>
        <li class="breadcrumb-item">OVERVIEW</li>
      </ol>

    </nav>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-primary"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Students</span>
                <span class="info-box-number"><?php 
                  $sql="select count('id') from students";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_array($result);
                  echo ""."$row[0]";
                  ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Teachers</span>
                <span class="info-box-number"><?php 
                  $sql="select count('id') from teachers";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_array($result);
                  echo ""."$row[0]";
                  ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fa fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Subjects</span>
                <span class="info-box-number"><?php 
                  $sql="select count('id') from subjects";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_array($result);
                  echo ""."$row[0]";
                  ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fa fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Classrooms</span>
                <span class="info-box-number"><?php 
                  $sql="select count('id') from classrooms";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_array($result);
                  echo ""."$row[0]";
                  ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-calendar-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Events</span>

                <span class="info-box-number"><?php 
                  $sql="select count('id') from classrooms";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_array($result);
                  echo ""."$row[0]";
                  ?>
                    
                  </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
      </div>
    </section>
      
     
     </div>
  </div>
  <!-- /.col-md-6 -->
 </div>
   
  </div>
</div><!-- /.container-fluid -->
</div>

<!-- /.content -->
</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer" align="center">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
     
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <a href="#">@ Online Classroom System 2021</a>.</strong> Developed by: Grace & Karl
  </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->

<script src="dist/js/pages/dashboard3.js"></script>
<script type="text/javascript">
  Moris.Bar({

    element:'sales-chart',
    data:[<?php echo $chart_data; ?>],
    xkey:'firstname',
    ykeys:['lastname','gender','address','email'],
    labels:['lastname','gender','address','email'],
    hideHover:'auto',
  });
</script>
</body>
</html>
  <?php }else{
  header("Location: ../home_page.php");
} ?>
