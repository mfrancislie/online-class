<?php 
   session_start();
   include "../db_conn.php";
  if (isset($_SESSION['username']) && isset($_SESSION['id'])) { 

     $query = "SELECT count(*) as present_active_count, status,
     case
         when status = 1 then 'Active'
         when status = 0 then 'Inactive'
       end as status FROM students GROUP BY status ;";
    $result = mysqli_query($conn, $query);
    $i=0;
    while ($row = mysqli_fetch_array($result)) {
        $label[$i] = $row["status"];
        $count[$i] = $row["present_active_count"];
        $i++;
    }


     $query = "SELECT count(*) as present_active_count, status,
     case
         when status = 1 then 'Active'
         when status = 0 then 'Inactive'
       end as status FROM teachers GROUP BY status ;";
    $result = mysqli_query($conn, $query);
    $i=0;
    while ($row = mysqli_fetch_array($result)) {
        $label1[$i] = $row["status"];
        $count1[$i] = $row["present_active_count"];
        $i++;
    }

$query = "SELECT name, count(*) as number FROM subjects GROUP BY name";  
 $result1 = mysqli_query($conn, $query); 

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
      <a href="subject-code.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-tasks"></i> SUBJECT</a>
      
      
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
        <!-- Small boxes (Stat box) -->
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
  </div>
  <!-- /.col-md-6 -->
</div>
<!-- /.row -->
<br/>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        

          
          <div class="col-md-12">
            <!-- BAR CHART -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Active Student</h3>

               
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="studChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

             <div class="col-md-12">
            <!-- BAR CHART -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Active Teacher</h3>

               
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="teachChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- STACKED BAR CHART -->
            <div class="card card-success">
             
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="col-md-12">
            <!-- DONUT CHART -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Overview Subjects</h3>  
              </div>
                <h3 align="center">All of these subjects are taken by student</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
              <div class="card-body">
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 

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
    <strong>Copyright &copy; <a href="#">@ Online Classroom System 2021</a>.</strong> Developed by: Francislie Momo & Elvira Medio
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
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>   

<script>
  $(function () {

    //--------------
    //- ACTIVE STUDENT -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var studChartCanvas = $('#studChart').get(0).getContext('2d')

    var studChartData = {
      labels  : ['Active', 'Inactive'],
      datasets: [
        {
          label               : 'Active',
          backgroundColor     : 'rgba(13,45,149)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :
           [<?php echo $count[1]; ?>,'<?php echo $label[1]; ?>','<?php echo $label[1]; ?>', <?php echo $count[1]; ?>]
        },
        {
          label               : 'Inactive',
          backgroundColor     : 'rgba(236,36,27)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : ['<?php echo $label[0]; ?>', <?php echo $count[0]; ?>]
        },
         {
          label               : '',
          backgroundColor     : 'rgba(253,253,253)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [0, 0, 0, 0, 0, 0, 0]
        }
      ]
    }

    var studChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }


     //-------------
    //- STUDENT CHART -
    //-------------
    var studChartCanvas = $('#studChart').get(0).getContext('2d')
    var studChartData = jQuery.extend(true, {}, studChartData)
    var temp0 = studChartData.datasets[0]
    var temp1 = studChartData.datasets[1]
    studChartData.datasets[0] = temp1
    studChartData.datasets[1] = temp0

    var studChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var studChart = new Chart(studChartCanvas, {
      type: 'bar', 
      data: studChartData,
      options: studChartOptions
    })



    //--------------
    //- ACTIVE TEACHER -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var teachChartCanvas = $('#teachChart').get(0).getContext('2d')

    var teachChartData = {
      labels  : ['Active','Inactive'],
      datasets: [
        {
          label               : 'Active',
          backgroundColor     : 'rgba(13,45,149)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : 
        [<?php echo $count1[1]; ?>,'<?php echo $label1[1]; ?>', <?php echo $count1[1]; ?>,""]
           
        },
        {
          label               : 'Inactive',
          backgroundColor     : 'rgba(236,36,27)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : ['<?php echo $label1[0]; ?>', <?php echo $count1[0]; ?>,"#0D2D95"]
        },
         {
          label               : '',
          backgroundColor     : 'rgba(253,253,253)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [0, 0, 0, 0, 0, 0, 0]
        }
      ]
    }

    var teachChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }


     //-------------
    //- TEACHER CHART -
    //-------------
    var teachChartCanvas = $('#teachChart').get(0).getContext('2d')
    var teachChartData = jQuery.extend(true, {}, teachChartData)
    var temp0 = teachChartData.datasets[0]
    var temp1 = teachChartData.datasets[1]
    teachChartData.datasets[0] = temp1
    teachChartData.datasets[1] = temp0

    var teachChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var teachChart = new Chart(teachChartCanvas, {
      type: 'bar', 
      data: teachChartData,
      options: teachChartOptions
    })


    
  })
  
   google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Name', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                               echo "['".$row["name"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of the subjects',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
   
  
</script>
</body>
</html>
  <?php }else{
  header("Location: ../home_page.php");
} ?>
