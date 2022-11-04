<?php 

  if (!isset($_SESSION)) {
    
      session_start();
  }

  include 'db.php';
  $con = connection();
  
    if (isset($_SESSION['UserLogin'])) {
      
      echo "Welcome ".$_SESSION['UserLogin'];
  }
  
 $sql = "SELECT * FROM students ORDER BY id Desc";
  $user = $con->query($sql) or die ($con->error);
  $row = $user->fetch_assoc();

  if (isset($_GET['search'])) {
    
    $search = $_GET['search'];

    $sql = "SELECT * FROM students WHERE firstname = '%$search%' || lastname = '%$search%' ";
    $user = $con->query($sql) or die ($con->error);
    $row = $user->fetch_assoc();
  }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>
<body>
  <a href="logout.php">Logout</a>
  <div class="container">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Table With State Save</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Course</th>
                            <th>Address</th>
                            <th>Contact</th>
                          </tr>
                        </thead>
                        <?php do { ?>
                        <tbody>
                          <tr>
                            <td><?php echo $row['firstname'];?></td>
                            <td><?php echo $row['lastname'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['course'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['contacts'];?></td>
                          </tr>
                          <?php } while($row = $user->fetch_assoc())?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>

<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>