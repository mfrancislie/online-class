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
  <div class="content-wrapper" style="background-image:url(images/g1.jpg);background-size: cover;">
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
      <a href="Subject-code.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-tasks"></i> SUBJECT</a>
      
      
    </div>

  
  </div>
  <!-- /.col-md-6 -->

  <div class="col-lg-9">
  
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin_dashboard.php">DASHBOARD</a></li>
        <li class="breadcrumb-item active">ALL USERS</li>
      </ol>
    </nav>

     <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-outline cardprimary w-fluid">
  <div class="card-header">
    <h3 class="card-title">Subject List</h3>
    <div class="card-tools">
        <button type="button" class="btn bg-gradient-primary" data-toggle="modal" data-target="#adds-code">
          <i class="fa fa fa-plus"></i> ADD NEW
        </button>
    </div>

  </div>
  <div class="card-body">
    <!--  <div class="btn-group float-right">
            <button type="button" class="d-none d-sm-inline-block btn btn-default btn-sm dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-print fa-md"></i> Print
            <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" role="menu" style="">

               <a href="print_pdf_allstudent.php?ID=<?php echo $row['id'];?>" class="dropdown-item"><i class="fa fa fa-list-alt"></i> SY2021</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item action_delete" href="delete_scode.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Do you really want to delete this user?'); " ><i class="fa fas fa-list-alt"></i> SY2022</a>
            </div>
        </div> -->
 
    <table class="table table-bordered table-compact table-stripped">
      <thead>
        <tr>
          <th>#</th>
          <th>Subject Code</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $i =1;
        $qry = $conn->query("SELECT * FROM subject_code order by subject_code asc");
        while($row=$qry->fetch_assoc()):
        ?>
        <tr>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['subject_code']; ?></td>
          <td><i><?php echo $row['description']; ?></i></td>
          <td class="text-center">
            <div class="btn-group">
            <button type="button" class="btn bg-gradient-primary btn-block btn-flat dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown" aria-expanded="false">
              Action
            <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" role="menu" style="">

              <a class="dropdown-item updatebtn" data-toggle="modal" data-target="#modal-default"><i class="fa fa fa-pen"></i> Edit</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item action_delete" href="delete_scode.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Do you really want to delete this user?'); " ><i class="fa fas fa-trash"></i> Delete</a>
            </div>
        </div>
          </td> 
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</section>
<?php include 'edit_subject_code.php';?>
</div>
</div>
</div>
<?php include 'add_subject_code.php';?>
</div>
</div>
</div>
<!-- /.content -->
</div>



  <!-- Main Footer -->
  <footer class="main-footer" align="center">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
     
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <a href="#">@ Online Classroom System 2021</a>.</strong> Developed by: Francislie Momo & Elvira Medio
  </footer>
</div>


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


<!-- Page specific script -->
<script>

  $(document).ready(function(){
    $('.new_subject').click(function(){
      uni_modal("New Subject",".manage_subject.php")
    })
    $('.action_edit').click(function(){
      uni_modal("Edit Subject",".manage_subject.php?id="+$(this).attr('data-id'));
    })
    $('.action_delete').click(function(){
    _conf("Are you sure to delete this subject?","delete_subject",[$(this).attr('data-id')])
    })
    $('table').dataTable();
  })
  function delete_subject($id){
    start_loader()
    $.ajax({
      url:_base_url_+'classes/Master.php?f=delete_subject',
      method:'POST',
      data:{id:$id},
      success:function(resp){
        if(resp==1){
          location.reload()
        }
      }

    })
  }

   $(document).ready(function () {

            $('.updatebtn').on('click', function () {

                $('#modaldefault').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#id').val(data[0]);
                $('#subject_code').val(data[1]);
                $('#description').val(data[2]);
                
            });
        });

</script>

</body>
</html>
  <?php }else{
  header("Location: ../home_page.php");
} ?>
