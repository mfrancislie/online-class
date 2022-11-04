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
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background: #D40000">
  <!-- Left navbar links -->
  <ul class="navbar-nav" style="margin:0 7rem;">
    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">093-9740-7122</a> </li>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock text-white"></i> MON-SAT 8:00 AM - 5:00 PM </li>
    &nbsp;&nbsp;
    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope text-white"></i> <a class="text-white" href="#">contact@aclc.college.com</a> </li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li>
      <a href="#" class="text-white">FAQ</a>
    </li>
    &nbsp;&nbsp;
    <li class="text-white">|</li>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <li>
      <a href="#" class="text-white">HELP DESK</a>
    </li>
    &nbsp;&nbsp;
    <li class="text-white">|</li>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <li>
      <a href="#" class="text-white">SUPPORT</a>
    </li>
  </div>
  </ul>
           
  </nav>
</div>



  <nav class="main-header navbar navbar-expand-md navbar-light" style="background: #2E3191;">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="img/logo-wide2.png" class="brand-image" alt="">
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
        <li class="nav-item" style="margin:10px 10px;"><a href="inbox.php" style="color: white"><i class="far fa-envelope" style="font-size: 3vh;color:yellow;"></i> MESSAGES</a>
         </li> 
        <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: white">
          <img src="img/user-default.png" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?=$_SESSION['username']?> <i class=" fas fa-angle-down" ></i></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="img/user-default.png" class="img-circle elevation-2" alt="User Image">

            <p>
              <?=$_SESSION['firstname']?>&nbsp;<?=$_SESSION['lastname']?>
              <small>Active</small>
            </p>
          </li>
         
            <!-- Menu Footer-->
          <li class="user-footer">
            <a href="myprofile.php?id=<?php echo $_SESSION['id'];?>" class="btn btn-default btn-flat">Profile</a>
            <a href="../logout.php" class="btn btn-primary btn-flat float-right">Logout</a>
          </li>
        </ul>
      </li>  
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image:url(img/6.jpg);  background-repeat: no-repeat;
  background-size: cover;">
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
      <a href="teacher_dashboard.php" class="list-group-item list-group-item-action active" style="background:#2E3191;">
       <i class="fas fa-tachometer-alt"></i> TEACHER'S DASHBOARD
      </a>
      <a href="classrooms.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-file-alt"></i> CLASSROOMS</a>
      <a href="all-students.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> STUDENTS<span class="right badge badge-danger">New</span>
      </a>
<a href="fullcalendar/school_calendar.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-calendar-alt"></i> CALENDAR</a>
      
      <a href="class-record.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-file-alt"></i> CLASS RECORDS</a>
          
    </div>
  </div>

        <div class="content-wrapper" style="background: transparent;">
        <!-- /.col -->
        <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Messages</li>
      </ol>
    </nav>

     

        <div class="col-md-12" style="width: 50rem;">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Inbox</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#compose_message" >
                  <i class="fa fa fa-pen"></i>  COMPOSE NEW MESSAGES
               </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <form action="msg_delete.php" method="POST">
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
               
                <div class="btn-group">
                  <button type="submit" name="msg_delete_btn" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">

                <table class="table table-hover table-striped">
                  <tbody>
                  <?php
                    $con = mysqli_connect("localhost","root","","own");
                    $username= $_SESSION['username'];
                    $query = "SELECT * FROM `messages` WHERE receiver = '$username' || sender = '$username' ORDER BY id ASC";
                    $query_run = mysqli_query($con, $query);

                   if (mysqli_num_rows($query_run) > 0) {
                      
                      foreach ($query_run as $row) {
                        
                        ?>

                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" name="msg_delete_id[]" value="<?php echo $row['id'];?>" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    
                    <td class="mailbox-name"><a href="read-mail.html"><?= $row['sender'];?></a></td>
                    <td class="mailbox-subject"><b><?= $row['subject'];?></b> - <?= $row['message'];?>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><?= $row['dt_sent'];?></td>
                    <td class="mailbox-date">
                     <a href="reply_messages.php?id=<?php echo $row['id'];?>" class="btn btn-default btn-sm">
                      <i class="fa fa fa-reply"></i> reply</a>
              
                    </td>
                  </tr>



                        <?php 

                      }
                   }else{

                      ?>
                      <tr>
                        <td colspan="5" style="text-align:center;">No Record Found</td>
                      </tr>
                      <?php
                     }
                    
                  ?>
                 </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
          </form>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">

                <div class="btn-group">
                  <button type="submit" name="msg_delete_btn" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
           
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'compose_messages.php'; ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
</div>
</div>
  <!-- Main Footer -->
 <footer class="main-footer" align="center">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; <a href="#">@ Online Classroom System 2021</a>.</strong> Developed by: Francislie Momo & Elvira Medio
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
  <?php }else{
  header("Location: ../home_page.php");
} ?>
