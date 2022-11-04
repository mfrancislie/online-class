<?php  
session_start();
include "../db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$username = test_input($_POST['username']);
$password = test_input($_POST['password']);

if (empty($username)) 
{
$_SESSION['error'] = " Username is Required";
header("Location: ../admin-login.php");
}else if (empty($password)) {
	$_SESSION['error'] = " Password is Required";
header("Location: ../admin-login.php");
}
else 
{

//not hashing	
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) 
{
// the user name must be unique
$row = mysqli_fetch_assoc($result);
if ($row['password'] === $password) 
{
	$_SESSION['firstname'] = $row['firstname'];
$_SESSION['lastname'] = $row['lastname'];
	$_SESSION['id'] = $row['id'];
	$_SESSION['role'] = $row['role'];
	$_SESSION['username'] = $row['username'];
	$_SESSION['usn'] = $row['usn'];

	if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
	{
		if ($_SESSION['role'] == 'Super') 
		{
			header("Location: super/super_dashboard.php");
		}
		else if ($_SESSION['role'] == 'Admission') {
			$_SESSION['success'] = "Successfully login!";
			header("Location: admin/admin_dashboard.php");
		}
		
		else if ($_SESSION['role'] == 'Teacher') {
			header("Location: teacher/teacher_dashboard.php");
		}
		else
		{
			header("Location: student/student_dashboard.php");
		}
	}
	else
	{

		header("Location: ../login.php");
	}


}else 
{
	$_SESSION['error'] = "  Something wrong your username or password!";
	header("Location: ../admin-login.php");
	
	
}
}
else 
{
$_SESSION['error'] = "  Something wrong your username or password!";
header("Location: ../admin-login.php");
	

}

}

}
else 
{
header("Location: ../login.php");
}
?>