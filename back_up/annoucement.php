<?php 

  include 'db_conn.php';

  $sql = "SELECT * FROM tbl_events ORDER by id";
  $events = $conn->query($sql) or die ($conn->error);
  $row = $events->fetch_assoc();



?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- page-about-style217:23-->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, #, learning," />


<!-- Page Title -->
<title>Online Classroom System</title>

<!-- Favicon and Touch Icons -->
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
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">

 
<!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">093-9740-7122</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 2:00 </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">contact@aclc.college.com</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline text-right sm-text-center">
                <li>
                  <a href="faq.php" class="text-white">FAQ</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white">Help Desk</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              <img src="images/logo-wide1.png" alt="">
            </a>
           <ul class="menuzord-menu">
              <li><a href="home_page.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="annoucement.php">Announcement</a> </li>
           <li><a href="#footer">Contact Us</a></li>
            <li>&nbsp;&nbsp;<a href="login.php" class="hvr-pulse btn btn-default btn-lg">Login</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
 
    <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Announcement</h3>
             
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Section: Schedule -->
    <section id="schedule" class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-80 pb-60">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-schedule">
                <thead>
                  <tr class="bg-theme-colored">
                    <th>Title</th>
                    <th>Start on</th>
                    <th>Until</th>
                  </tr>
                </thead>
                <?php do{?>
                <tbody>
                  <tr>
                    <td><strong><?php echo $row['title'];?></strong></td>
                    <td><?php echo $row['start'];?></td>
                    <td><?php echo $row['end'];?></td>
                  </tr>
                 
                </tbody>
              <?php }while($row = $events->fetch_assoc())?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->


 <!-- Footer -->
  <footer id="footer" class="footer bg-black-222">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">
            <p>Mandaue City, Maguikay Street, 201</p>
            <ul class="mt-5">
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">093-9740-7122</a> </li>
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@aclc.college.com</a> </li>
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">aclccollege.net/mandaue</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list-border">
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Sitemap</a></li>
              <li><a href="#">Faq's</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-sm-6 col-md-5">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Opening Hours</h5>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right flip"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix text-white"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right flip"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right flip"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right flip"> Closed </div>
                </li>
                <li class="clearfix"> <span> Sat : </span>
                  <div class="value pull-right flip"> 10.00 am - 2.00 pm </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-6 sm-text-center">
            <p class="font-13 text-black-777 m-0"><a target="_blank">Copyright ?? Online Classroom System 2021 Developed by: Grace & </a></p>
          </div>
          <div class="col-md-6 text-right flip sm-text-center">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-circled icon-sm">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

</body>

<!-- page-about-style217:28-->
</html>