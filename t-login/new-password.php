<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, #, learning," />


<!-- Page Title -->
<title>Online Classroom System</title>

<!-- Favicon and Touch Icons -->
<link href="../images/favicon.png" rel="shortcut icon" type="image/png">
<link href="../images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="../images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="../images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="../images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link href="../css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="../menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="../css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="../css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="../css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="../js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="../js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="../js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="../css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="../js/jquery-2.2.4.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="../js/jquery-plugin-collection.js"></script>
<body class="">
<div id="wrapper" class="clearfix">
 
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->

    <section id="home" class="divider bg-lighter">
      <a href="../login_page.php" class="btn btn-transparent" style="color: #D4D3D3"><i class="fa fa-arrow-circle-left">&nbsp;</i>Back</a>      
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-5 col-md-push-4">
                <div class="text-center mb-80"><a href="#" class=""><img alt="" src="../images/logo-wide1.png"></a></div>
                <h2 class="text-center">New Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                <form action="new-password.php" method="POST" name="login-form" class="clearfix">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>Create Password</label>
                      <div class="input-group">
                      <input type="password" value="" name="password" placeholder="Create new password"  class="form-control" data-height="49px" id="password">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default"><i class="fa fa-user text-theme-colored font-24 mt-5"></i></button>
                      </span>
                     </div>
                    
                      <label>Comfirm Password</label>
                      <div class="input-group">
                      <input type="password" value="" name="cpassword" placeholder="Comfirm your password"  class="form-control" data-height="49px" id="password">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default"><i class="fa fa-user text-theme-colored font-24 mt-5"></i></button>
                      </span>
             
                    </div>
                    </br>
                    <button type="submit" name="change-password" class=" form-control btn btn-colored btn-theme-colored btn-lg border-left-theme-color-2-4px">Change now</button>
                    </div>

                  </div>
                  </div>

                  <div>
                   
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
  <footer id="footer" class="footer">
    <div class="container pt-70 pb-40">
      
     
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0"><a target="_blank" href="#">Online Classroom System</a></p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="../js/custom.js"></script>
<script type="../text/javascript" src="main.js"></script>

</body>

<!-- form-login-style322:31-->
</html>