<?php 
   session_start();
   include "../db_conn.php";
      // if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   
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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper1">



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
  <div class="content-wrapper" style="background-image:url(images/g1.jpg);
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
        <a href="admin_dashboard.php" class="list-group-item list-group-item-action active" style="background:#2E3191; font-size: 18px">
       <i class="fas fa-tachometer-alt"></i> DASHBOARD
      </a>      
      <a href="all-students.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> ALL STUDENTS <span class="right badge badge-danger">New</span>
</a>
      <a href="all-teachers.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> ALL TEACHERS</a>
      <a href="fullcalendar/school_calendar.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-calendar-alt"></i> SCHOOL CALENDAR</a>
      <a href="subject-code.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-tasks"></i> SUBJECT</a>
      
    </div>

  
  </div>
  <!-- /.col-md-6 -->

  <div class="col-lg-9">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin_dashboard.php">DASHBOARD</a></li>
        <li class="breadcrumb-item active">ALL TEACHERS</li>
      </ol>

    </nav>

   <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box" style="background: #EC241B;color: white;">
              <div class="inner">
                <h3><?php 
                  $sql="select count('id') from students";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_array($result);
                  echo ""."$row[0]";
                  ?></h3>

                <p>STUDENTS</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
             <a href="all-students.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box" style="background: #0D2D95;color: white;">
              <div class="inner">
                <h3><?php 
                  $sql="select count('id') from teachers";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_array($result);
                  echo ""."$row[0]";
                  ?></h3>

                <p>TEACHERS</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="all-teachers.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php 
                  $sql="select count('id') from subjects";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_array($result);
                  echo ""."$row[0]";
                  ?></h3>

                <p>SUBJECTS</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         </div>
        <!-- /.row -->
  </div>

<section class="content col-lg-12" style="margin-top:20px ;">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">ALL TEACHERS</h3>
        </div>
      <div class="card-body">
        <div class="row">
        <button type="button" class="btn bg-gradient-primary" data-toggle="modal" data-target="#addteacher">
          <i class="fa fa fa-plus"></i> ADD NEW TEACHER
        </button>
        <a href="print_pdf_teacher.php" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" style="margin-left: 85%"><i class="fas fa-download fa-md text-white-50"></i> Teachers List</a>
       </div>

       <br/>
        <table id="example1" class="table table-bordered table-striped">
         <thead> 
          <tr style="font-size: 14px;">    
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>GENDER</th>
            <th>EMAIL</th>
            <th>CONTACTS</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
       <?php
        $edit=mysqli_query($conn,"select * from teachers");
        while($row=mysqli_fetch_array($edit))
        {
        ?>
            <tr>
              
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['firstname'];?></td>
              <td><?php echo $row['lastname'];?></td>
              <td><?php echo $row['gender']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['contacts']; ?></td>
               
             <td>  
              
              <a href="edit_new_teacher.php?ID=<?php echo $row['id'];?>" class="btn btn-warning btn-sm">
              <i class="fa fa fa-edit"></i> Edit</a>
       
              <a class="btn btn-danger btn-sm" href="delete_teacher.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Do you really want to delete this user?'); " >
                <i class="fa fa fa-trash"></i> Delete</a>
             
              </td>
            </tr>
            <?php
              }
            ?>
        </tbody>               
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col-md-6 -->
</div>
<!-- /.row -->
</section>

    </div>
  </div>
  <!-- /.col-md-6 -->
</div>
<!-- /.row -->
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
<?php include 'add_new_teacher.php'; ?>
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
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
    
    })
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
