<?php 
   session_start();
   include "../../db_conn.php";
      if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   
 ?>

<!DOCTYPE html>
<html>

<head>
   <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
<link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
<script src="fullcalendar/lib/jquery.min.js"></script>
<script src="fullcalendar/lib/moment.min.js"></script>
<script src="fullcalendar/fullcalendar.min.js"></script>

<script>

$(document).ready(function () {
    var calendar = $('#calendar_teacher').fullCalendar({
        editable: true,
        events: "fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Title:');

            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                $.ajax({
                    url: 'add-event.php',
                    data: 'title=' + title + '&start=' + start + '&end=' + end,
                    type: "POST",
                    success: function (data) {
                        displayMessage("Added Successfully");
                    }
                });
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true
                        );
            }
            calendar.fullCalendar('unselect');
        },
        
        editable: true,
        eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: 'edit-event.php',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Updated Successfully");
                        }
                    });
                },
        eventClick: function (event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: "delete-event.php",
                    data: "&id=" + event.id,
                    success: function (response) {
                        if(parseInt(response) > 0) {
                            $('#calendar_teacher').fullCalendar('removeEvents', event.id);
                            displayMessage("Deleted Successfully");
                        }
                    }
                });
            }
        }

    });
});

function displayMessage(message) {
      $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}
</script>

<style>
body {
    margin-top: 50px;
    text-align: center;
    background-image: url(back.jpg);
   
}

#calendar {
    width: 700px;
    margin: 0 auto;
}

.response {
    height: 60px;
}

.success {
    background: #cdf3cd;
    padding: 10px 60px;
    border: #c3e6c3 1px solid;
    display: inline-block;
}
</style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper" style="margin-top: -8vh;">
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
        <img src="../img/logo-wide2.png" class="brand-image" alt="">
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
          <img src="../img/user-default.png" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?=$_SESSION['username']?> <i class=" fas fa-angle-down" ></i></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="../img/user-default.png" class="img-circle elevation-2" alt="User Image">

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
   <div class="list-group" style="text-align:left;">
       <a href="../teacher_dashboard.php" class="list-group-item list-group-item-action active" style="background:#2E3191;">
       <i class="fas fa-tachometer-alt"></i> TEACHER'S DASHBOARD
      </a>
      <a href="../classrooms.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-file-alt"></i> CLASSROOMS</a>
      <a href="../all-students.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> STUDENT <span class="right badge badge-danger">New</span>
      </a>
      <a href="school_calendar.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-calendar-alt"></i> CALENDAR</a>
     
      <a href="../class-record.php" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-file-alt"></i> CLASS RECORD</a>
     
      
    </div>
 </div>
  <div class="col-lg-9">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb text-white" style="background:#2E3191;">
        <li class="breadcrumb-item text-white"><a href="../admin_dashboard.php" style="font-size: 14px">DASHBOARD</a></li>
        <li class="breadcrumb-item active text-white" style="font-size: 12px">CALENDAR</li>
      </ol>

    
</div>
</div>
<div class="card col-lg-9" style="margin-top:-28vh; margin-left:43.5vh;">
   <div class="card-header">
          <h3 class="card-title">School Calendar</code></h3>
        </div>
<div id='calendar_teacher'></div>
<!-- jQuery -->


</div>

</nav>
</body>
</html>
<?php }else{
  header("Location: ../home_page.php");
} ?>