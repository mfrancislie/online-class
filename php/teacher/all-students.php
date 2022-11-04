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

 <div class="col-lg-9" >
       <nav aria-label="breadcrumb" >
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active">All students</li>
      </ol>

    </nav>

      
       <div class="card">
        <div class="card-header text-white" style="background:#D40000;">
          <h3 class="card-title">All Students</h3>
        </div>
      <!-- /.card-header -->

      <div class="card-body">
        <br/>
        <table id="example1" class="table table-bordered table-striped">
         <thead> 
          <tr>    
            <th>ID</th>
            <th>Usn</th>
            <th>Full Name</th>
            <th>gender</th>
            <th>course</th>
            <th>year</th>
            <th>Status</th>
            <th>Action</th>
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
                <?php 

                if ($row['status'] == 1) {
                        
                    echo "<p id=str".$row['id']."><span class='badge badge-success'>Active</span></p>";

                }else{

                    echo "<p str".$row['id']."><span class='badge badge-danger'>Inactive</span></p>";

                }

                ?>
                     
            </td>
               
             <td>  
               <select class="btn btn-danger btn-sm" onchange="active_inactive_student(this.value, <?php echo $row['id']; ?>)">
                    <option value="">-select-</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>         
                </select>
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

  </aside>

  <!-- /.control-sidebar -->
<?php include 'create_classroom.php'; ?>
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

  function active_inactive_student(val,user_id){


        $.ajax({

                type: 'post',
                url: 'change_status_student.php',
                data:{val:val,user_id:user_id},
                success: function(result){
                    // console.log(result);
                    if (result == 1) {

                        $('#str'+user_id).html('Active').css('color', 'green');

                    }else{

                        $('#str'+user_id).html('Inactive').css('color', 'red');
                    }
                }
        });

    }

</script>
</body>
</html>
  <?php }else{
  header("Location: ../home_page.php");
} ?>
