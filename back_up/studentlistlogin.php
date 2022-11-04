<?php 
	if (!isset($_SESSION)) {
		
		session_start();
	}
	
	include 'db.php';
	$con =  connection();

	if (isset($_SESSION['UserLogin'])) {
		
		echo "Welcome ".$_SESSION['UserLogin'];
	}else{


		echo "Welcome Guest";
	}

	$sql = "SELECT * FROM students ORDER BY id Desc";
	$user = $con->query($sql) or die ($con->error);
	$row = $user->fetch_assoc();



?>
<!DOCTYPE html>
<html lang="en">


<!-- navbar.html  21 Nov 2019 03:51:03 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
	<?php if(isset($_SESSION['UserLogin'])){?>

		<a href="logout.php">Logout</a>
		<br>
		<form action="result.php" method="get">
			<input type="text" name="search" id="search">
			<button type="submit">Search</button>
		</form>
		<?php if($_SESSION['Access'] == "admin"){?>
		<a href="add.php">Add new</a>
		<?php }?>
		<table border="1">
			<tr>
				<th></th>
				<th>First name</th>
				<th>Last name</th>
				<th>Gender</th>
			</tr>
		<?php do {?>
			<tr>
				<td><a href="view_details.php?ID=<?php echo $row['id'];?>">view</a></td>
				<td><?php echo $row['first_name'];?></td>
				<td><?php echo $row['last_name'];?></td>
				<td><?php echo $row['gender'];?></td>
			</tr>
		<?php }while($row = $user->fetch_assoc())?>
		</table>
    <?php }else{?>
    	<a href="login_check.php">Login</a>
    		
    <?php } ?>

     <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>
</html>