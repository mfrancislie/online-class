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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">

<div class="wrapper">


  <nav class="main-header navbar navbar-expand-md navbar-light" style="background:#313491">
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

      <li class="nav-item" style="margin:0 20px;"><a href="messages.php" style="color: white"><i class="far fa-envelope"></i> MESSAGES</a>
      </li> 

      <li class="nav-item"><a href="../logout.php" style="color: white"><i class="fa fa-power-off"></i> LOGOUT</a>
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
     <a href="super_dashboard.php" class="list-group-item list-group-item-action active" style="background: #2E3191;font-family: Century Gothic;font-weight: 600">
       <i class="fas fa-tachometer-alt"></i> DASHBOARD
      </a>
      
      <a href="all-students.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> ALL STUDENTS <span class="right badge badge-danger">New</span></a>

      <a href="all-teachers.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> ALL TEACHERS</a>

       <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-book"></i> CLASSROOMS</a>
     
      <a href="subjects.php" class="list-group-item list-group-item-action"><i class="fa fa-book"></i> SUBJECTS</a>
      
      <a href="myprofile.php?id=<?php echo $_SESSION['id'];?>" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-user-alt"></i> MY PROFILE</a>

    </div>

  
  </div>
  <!-- /.col-md-6 -->

  <div class="col-lg-9">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin_dashboard.php">DASHBOARD</a></li>
        <li class="breadcrumb-item active">ALL STUDENTS</li>
      </ol>

    </nav>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">ALL STUDENTS</h3>
        </div>
      <!-- /.card-header -->

      <div class="card-body">
        <div class="row1">
        <button type="button" class="btn bg-gradient-primary" data-toggle="modal" data-target="#addstudent" >
          <i class="fa fa fa-plus-circle"></i> ADD NEW STUDENT
        </button>
        <a href="print_pdf_students.php" class="d-none d-sm-inline-block btn btn-sm btn-warning" style="margin-left:83%;"><i class="fas fa-download fa-md"></i> Download List</a>
       </div>

       <br/>
        <table id="example1" class="table table-bordered table-striped">
         <thead> 
          <tr style="font-size: 14px;">    
            <th>ID</th>
            <th>USN</th>
            <th>FULL NAME</th>
            <th>GENDER</th>
            <th>COURSE</th>
            <th>YEAR</th>
            <th>STATUS</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
       <?php
        $query=mysqli_query($conn,"select * from students");
        while($row=mysqli_fetch_array($query))
        {
        ?>
            <tr>  
            <th><?php echo $row['id'];?></th> 
            <td><?php echo $row['usn'];?></td>
            <td><?php echo $row['firstname']." ".$row['lastname'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['course'];?></td>
            <td><?php echo $row['year'];?></td>
            <td>
               <?php echo $row['status'];?>
                    
            </td>
               
             <td>  
              
              <a href="edit_student.php?ID=<?php echo $row['id'];?>" class="btn bg-gradient-success btn-sm">
              <i class="fa fa fa-edit"></i></a>
       
              <a class="btn bg-gradient-danger btn-sm" href="delete_student.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Do you really want to delete this user?'); " >
                <i class="fa fa fa-trash"></i></a>
             
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
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
  <!-- /.content-wrapper -->


  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- Main Footer -->
  <footer class="main-footer" align="center">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <a href="#">@ Online Classroom System 2021</a>.</strong> Developed by: Grace & Karl
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
  <?php }else{
  header("Location: ../home_page.php");
} ?>
