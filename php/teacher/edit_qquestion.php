<?php 
include "../db_conn.php";
$id = $_GET['id'];  
$update=mysqli_query($conn, "SELECT * FROM quiz WHERE id = '$id'"); 
$urow=mysqli_fetch_array($update);
$sem_code = $urow['sem_code'];
$q_code = $urow['q_code'];

 if (isset($_POST['edit']))
  {
    $id = $_POST['id'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $choice1 = $_POST['choice1'];
    $choice2 = $_POST['choice2'];
    $choice3 = $_POST['choice3'];
    $subject = $_POST['subject'];
    
     
          $query= "UPDATE `quiz` SET question='$question', answer='$answer', choice1='$choice1', choice2='$choice2', choice3='$choice3', subject='$subject' WHERE id='$id'";
          $result = mysqli_query($conn , $query) or die(mysqli_error($conn)); 
          if (mysqli_affected_rows($conn) > 0)
          {
            echo "<script>alert('SUCCESSFULLY UPDATED');
            window.location.href='quiz.php?subject=$subject';</script>";
          }
          else 
          {
            echo "<script>alert('Error Occured');</script>";
          }   
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDIT QUIZ QUESTION</title>
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
  
          <div class="col-md-9" style="align-items:center; margin: -20px 0px 0px 180px;">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
                  <li class="nav-item">QUESTION DETAILS</li>
                </ul>
              </div><!-- /.card-header -->
           
                <div class="container-fluid">
                  <div class="tab-pane" id="settings">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="icon-box mb-0 p-0">  
                  </div>
                    <div class="row">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $urow['id']; ?>">
                      <div class="form-group col-md-6">
                      <label>ID</label>
                      <input name="id" id="id" class="form-control" type="text" value="<?php echo $id; ?>" disabled>
                     </div>
                      <div class="form-group col-md-6">
                      <label>Question Code</label>
                      <input type="text" name="q_code" class="form-control" value="<?php echo $urow['q_code']; ?>" disabled>
                     </div>
                     <div class="form-group col-md-6">
                      <label>Sem Code</label>
                     <input type="text" name="sem_code" class="form-control" value="<?php echo $urow['sem_code']; ?>" disabled>
                     </div>

                     <div class="form-group col-md-6">
                      <label>Question</label>
                      <input name="question" id="question" class="form-control" type="text" value="<?php echo $urow['question'];?>">
                     </div>

                     <div class="form-group col-md-6">
                      <label>Answer</label>
                      <input name="answer" id="answer" class="form-control" type="text" value="<?php echo $urow['answer'];?>">
                     </div>

                      <div class="form-group col-md-6">
                      <label>Choice 1</label>
                      <input name="choice1" id="choice1" class="form-control" type="text" value="<?php echo $urow['choice1'];?>">
                     </div>

                      <div class="form-group col-md-6">
                      <label>Choice 2</label>
                      <input name="choice2" id="choice2" class="form-control" type="text" value="<?php echo $urow['choice2'];?>">
                     </div>

                     <div class="form-group col-md-6">
                      <label>Choice 3</label>
                      <input name="choice3" id="choice3" class="form-control" type="text" value="<?php echo $urow['choice3'];?>">
                     </div>
                      <input type="hidden" name="subject" class="form-control" value="<?php echo $urow['subject']; ?>">

                     

                     
                  </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="edit" class="hvr-pop btn btn-primary" style="margin-left: -25vh; background-color:#2E3191;">Update Now</button>
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

</body>
</html>

