<?php 
   session_start();
   include "../db_conn.php";
   
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {  
$id = $_SESSION['id'];  
$update=mysqli_query($conn, "SELECT * FROM teachers WHERE id = '$id'"); 
 $urow=mysqli_fetch_array($update);

if (isset($_POST['edit'])) 
{
  $id=$_POST['id'];
 
  $email = $_POST['email'];


  $sql = "SELECT * FROM teachers WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 0)
        {

      $query= "UPDATE `teachers` SET email='$email' WHERE id='$id'";
      $result = mysqli_query($conn , $query) or die(mysqli_error($conn)); 
        if (mysqli_affected_rows($conn) > 0)
        {
          echo "<script>alert('SUCCESSFULLY UPDATED');
          window.location.href='myprofile.php?ID=".$id."';</script>";
        }
        else 
        {
          echo "<script>alert('Error Occured');</script>";
        }
     

    }
    else 
    {
      echo "<script>alert('Username Exists');
      window.location.href='myprofile.php?ID=".$id."';</script>";
        
    }


      }
 
 
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
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background: #D40000;">
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
  <div class="content-wrapper" style="background-image: url(images/bg2.jpg);">
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
      <a href="teacher_dashboard.php" class="list-group-item list-group-item-action active" style="background:#2E3191;font-size: 18px;">
       <i class="fas fa-tachometer-alt"></i> TEACHERS DASHBOARD
      </a>
      <a href="classrooms.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-file-alt"></i> CLASSROOMS</a>
      <a href="all-students.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> STUDENTS <span class="right badge badge-danger">New</span>
      </a>
      <a href="fullcalendar/school_calendar.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-calendar-alt"></i> CALENDAR</a>
     
      <a href="class-record.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-file-alt"></i> CLASS RECORD</a>
      
      
    </div>

  
  </div>
  <!-- /.col-md-6 -->

  <div class="col-lg-9">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="teacher.php">DASHBOARD</a></li>
        <li class="breadcrumb-item active">PERSONAL INFORMATION</li>
      </ol>
    </nav>
       <div class="content-wrapper1">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PROFILE</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid" >
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
              <div class="card card-primary">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="img-fluid"
                       src="img/user-default.PNG"
                       alt="User profile picture">
                

                 </div>
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                 BSIT                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Sambag San Vicente Liloan Cebu</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Have to learn Animation</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
           
                <div class="container-fluid" style="margin-top: 5vh">
                  <div class="tab-pane" id="settings">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="icon-box mb-0 p-0">  
                  </div>
                    <div class="row">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $urow['id']; ?>">
                      <div class="form-group col-md-6">
                      <label>Username</label>
                      <input disabled="disabled" name="username" id="username" class="form-control" type="text" placeholder="Enter Username" value="<?php echo $urow['username'];?>">
                     </div>
                      <div class="form-group col-md-6">
                      <label>Password</label>
                      <input disabled="disabled" name="password" id="password" class="form-control" type="password" placeholder="Enter Password" value="<?php echo $urow['password'];?>">
                     </div>
                     <div class="form-group col-md-6">
                      <label>First Name</label>
                      <input disabled="disabled" name="firstname" id="firstname" class="form-control" type="text" placeholder="Enter First Name" value="<?php echo $urow['firstname'];?>">
                     </div>

                     <div class="form-group col-md-6">
                      <label>Last Name</label>
                      <input disabled="disabled" name="lastname" id="lastname" class="form-control" type="text" placeholder="Enter Last Name" value="<?php echo $urow['lastname'];?>">
                     </div>

                     <div class="form-group col-md-4">
                      <label>Gender</label>
                        <select disabled="disabled" class="form-control" name="gender" id="gender">
                          <option>-Select-</option>
                          <option value="Male" <?php echo($urow['gender'] == "Male")? 'selected' : '';?>>Male</option>
                          <option value="Female" <?php echo($urow['gender'] == "Female")? 'selected' : '';?>>Female</option>
                        </select>
                     </div>

                    
                      <div class="form-group col-md-6">
                      <label>Address</label>
                      <input disabled="disabled" name="address" id="address" class="form-control" type="text" placeholder="Enter Address" value="<?php echo $urow['address'];?>">
                     </div>

                     <div class="form-group col-md-6">
                      <label>Contact No</label>
                      <input disabled="disabled" name="contacts" id="contacts" class="form-control" type="text" placeholder="Enter Contact Number" value="<?php echo $urow['contacts'];?>">
                     </div>

                     <div class="form-group col-md-6">
                      <label>Email</label>
                      <input name="email" id="email" class="form-control" type="email" placeholder="Enter Email" type="email" value="<?php echo $urow['email'];?>">
                     </div>

                  </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="edit" class="hvr-pop btn btn-danger" style="margin-left: -15vh">Update Now</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
        </div>
     </div>
   </div>
  </div>
 </div>
</div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

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
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

</body>
</html>
  <?php }else{
  header("Location: ../home_page.php");
} ?>
