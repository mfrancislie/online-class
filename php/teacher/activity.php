<?php 
   session_start();
   include "../db_conn.php";
      if (isset($_SESSION['username']) && isset($_SESSION['id'])) { 

      $query = "SELECT * FROM users";
      $result = mysqli_query($conn, $query);
      $chart_data = '';
      $subject = $_GET['subject'];
      $edit=mysqli_query($conn,"select * from classrooms where subject='".$subject."'");
      $erow=mysqli_fetch_array($edit);
      $teacher=$erow['teacher'];
      $edit1=mysqli_query($conn,"select * from users where id='".$teacher."'");
      $erow1=mysqli_fetch_array($edit1);
      $firstname = $erow1['firstname'];
      $lastname = $erow1['lastname'];

      while ($row = mysqli_fetch_array($result)) {
          
          $chart_data .="{ firstname:'".$row['firstname']."', lastname:'".$row['lastname']."', gender:'".$row['gender']."', address:'".$row['address']."',email:'".$row['email']."' }";
        }  

        $chart_data = substr ($chart_data, 0, -2);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $subject; ?> Activity Page</title>
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
 <!-- Navbar -->

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

      <li class="nav-item" style="margin:0 20px;"><a href="../logout.php" style="color: white"><i class="far fa-envelope"></i> Messages</a>
      </li>
  
      <li class="nav-item"><a href="../logout.php" style="color: white"><i class="fa fa-power-off"></i> Logout</a>
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
      <a href="teacher_dashboard.php" class="list-group-item list-group-item-action active" style="background:#2E3191;">
       <i class="fas fa-tachometer-alt"></i> Dashboard
      </a>
      <a href="classrooms.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-file-alt"></i> Classrooms</a>
      <a href="all-students.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Students <span class="right badge badge-danger">New</span>
      </a>
<a href="fullcalendar/school_calendar.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-calendar-alt"></i> Calendar</a>
      <a href="messages.php" class="list-group-item list-group-item-action"><i class="fas fa fa-comments"></i> Messages</a>
      <a href="class-record.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-file-alt"></i> Class Record</a>

    </div>


  </div>
  <!-- /.col-md-6 -->

  <div class="col-lg-9">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="teacher_dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active"><?php echo $subject; ?> Activities Page</li>
      </ol>

    </nav> 
    <div class="main-panel">
    <div class="card">
      <div class="card-body">
        <div class="row1">
        <button type="button" class="btn btn-primary" data-toggle="modal"
        data-target="#addquiz" style="background-color:#2E3191;">Add an Activity</button>
       </div>

       <br/>
        <table id="example1" class="table table-bordered table-striped" style="text-align:center;">
         <thead>
          <tr>
            <th>ID</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Choice 1</th>
            <th>Choice 2</th>
            <th>Choice 3</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $sql=mysqli_query($conn,"select * from quiz where subject='".$subject."'");
        while ($result=mysqli_fetch_array($sql)) 
        {
        ?>
            <tr>
              <td><?php echo $result['id']; $id= $result['id']; ?></td>
              <td><?php echo $result['question']; ?></td>
              <td><?php echo $result['answer']; ?></td>
              <td><?php echo $result['choice1']; ?></td>
              <td><?php echo $result['choice2']; ?></td>
              <td><?php echo $result['choice3']; ?></td>
              <td style="width:15%;">
                 <a href="edit_qquestion.php?id=<?php echo $result["id"]; ?>" class="btn btn-primary btn-sm"><i class="fa fa fa-pen"></i></a>
                      
                     
               <a class="btn btn-danger btn-sm" href="delete_qquestion.php?id=<?php echo $result["id"]; ?>" onclick="return confirm('Do you really want to delete this question?'); " ><i class="fa fa fa-trash "></i></a>
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
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<?php include 'add_activity.php';
?>

  <!-- Main Footer -->
  <footer class="main-footer" align="center">
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
