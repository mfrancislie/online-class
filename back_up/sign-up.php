<?php 
include "db_conn.php";

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, #, learning," />

<title>Online Classroom System</title>

<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
</head>
<body class="">
<div id="wrapper" class="clearfix">
  

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider bg-">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><a href="#" class=""><img alt="" src="images/logo-wide1.png"></a></div>
                <form action="php/sign_upcheck.php" method="post">
                  <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="pe-7s-users"></i>
                    </a>
                    <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                  </div>
                  <hr>
                    <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$_GET['error']?>
                    </div>
                    <?php } ?>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Usn</label>
                      <input name="usn" id="usn" class="form-control" type="text" placeholder="Enter Usn" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Username</label>
                      <input name="username" id="username" class="form-control" type="text" placeholder="Enter Username" required>
                    </div>

                  </div>                
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Password</label>
                      <input name="password" id="password"  class="form-control" type="password" placeholder="Enter Password" required>
                    </div>

                     <div class="form-group col-md-6">
                      <label>First Name</label>
                      <input name="firstname" id="firstname" class="form-control" type="text" placeholder="Enter First Name" required>
                     </div>

                     <div class="form-group col-md-6">
                      <label>Last Name</label>
                      <input name="lastname" id="lastname" class="form-control" type="text" placeholder="Enter Last Name" required>
                     </div>

                     <div class="form-group col-md-3">
                      <label>Gender</label>
                        <select class="form-control" name="gender" id="gender">
                          <option>-Select-</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                     </div>

                     <div class="form-group col-md-3">
                      <label>Course</label>
                        <select class="form-control" name="course" id="course">
                          <option>-Select-</option>
                          <option value="BSIT">BS-Computer Information</option>
                          <option value="Female">BS-Education</option>
                        </select>
                     </div>

                     <div class="form-group col-md-3">
                      <label>Year Level</label>
                      <select class="form-control" name="year" id="year">
                        <option selected value="1st">First Year</option>
                        <option value="2nd">Second Year</option>
                        <option value="3rd">Third Year</option>
                        <option value="4th">Fourth Year</option>
                      </select>
                     </div>
 
                      <div class="form-group col-md-6">
                      <label>Address</label>
                      <input name="address" id="address" class="form-control" type="text" placeholder="Enter Address" required>
                     </div>

                     <div class="form-group col-md-6">
                      <label>Contact No</label>
                      <input name="contacts" id="contacts" class="form-control" type="text" placeholder="Enter Contact Number" required>
                     </div>

                     <div class="form-group col-md-6">
                      <label>Email</label>
                      <input name="email" id="email" class="form-control" type="email" placeholder="Enter Email" type="email" required>
                     </div>

                  </div>
                  <div class="form-group">
                    <button class="hvr-bounce-in btn btn-gray btn-theme-colored mt-15" type="submit" name="sign-up">Register Now</button>
                    <a href="login.php" class="btn btn-transparent mt-15" style="color:#000">Login</a>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer bg-black-222">
    <div class="container p-20">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0"><a target="_blank" href="https://www.templateshub.net">asdf</a></p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- form-register-style322:31-->
</html>