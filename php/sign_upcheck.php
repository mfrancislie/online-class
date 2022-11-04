<?php  
session_start();
include "../db_conn.php";

if (isset($_POST['usn']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['course']) && isset($_POST['year']) && isset($_POST['address']) && isset($_POST['contacts']) && isset($_POST['email'])) {
{

	function test_input($data) 
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  $data = trim($data);
	  $data = trim($data);
	  $data = htmlspecialchars($data);
	  $data = htmlspecialchars($data);
	  $data = htmlspecialchars($data);
	  $data = trim($data);
	  $data = trim($data);
	  $data = trim($data);
	  return $data;
	}
	
	$usn = test_input($_POST['usn']);
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$firstname = test_input($_POST['firstname']);
	$lastname = test_input($_POST['lastname']);
	$gender = test_input($_POST['gender']);
	$course = test_input($_POST['course']);
	$year = test_input($_POST['year']);
	$address = test_input($_POST['address']);
	$contacts = test_input($_POST['contacts']);
	$email = test_input($_POST['email']);

	if (empty($usn)) 
	{
		header("Location: ../sign_up.php?error=USNis Required");
	}
	else if (empty($username)) 
	{
		header("Location: ../sign_up.php?error=User Name is Required");
	}
	else if (empty($password)) 
	{
		header("Location: ../sign_up.php?error=Password is Required");
	}
	else if (empty($firstname)) 
	{
		header("Location: ../sign_up.php?error=Firs Name is Required");
	}
	else if (empty($lastname)) 
	{
		header("Location: ../sign_up.php?error=Last Name is Required");
	}
	else if (empty($gender)) 
	{
		header("Location: ../sign_up.php?error=Gender is Required");
	}
	else if (empty($course)) 
	{
		header("Location: ../sign_up.php?error=Course is Required");
	}
	else if (empty($year)) 
	{
		header("Location: ../sign_up.php?error=Year Level is Required");
	}
	else if (empty($address)) 
	{
		header("Location: ../sign_up.php?error=Address is Required");
	}
	else if (empty($contacts)) 
	{
		header("Location: ../sign_up.php?error=Contact Number is Required");
	}
	else if (empty($email)) 
	{
		header("Location: ../sign_up.php?error=Email is Required");
	}
	else 
	{

		// Hashing the password
		$password = md5($password);
        
        $sql = "SELECT * FROM students WHERE username='$username' OR usn='$usn'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) >= 1) 
        {

        	echo "<script>alert('USername or USN EXISTS');
        	window.location.href='../sign_up.php';</script>";

        }
        else 
        {
        	$query = "INSERT INTO students(usn,username,password,firstname,lastname,gender,course,year,address,contacts,email) VALUES ('$usn' , '$username' , '$password' , '$firstname', '$lastname', '$gender' , '$course' , '$year', '$address', '$contacts', '$email' )";
      		$result = mysqli_query($conn , $query) or die(mysqli_error($conn));
      		if (mysqli_affected_rows($conn) > 0) 
      		{
      		$query = "INSERT INTO users(role,username,password,firstname,lastname,gender,address,contacts,email) VALUES ('student' , '$username' , '$password' , '$firstname', '$lastname', '$gender', '$address', '$contacts', '$email' )";
      			$result = mysqli_query($conn , $query) or die(mysqli_error($conn)); 
      			if (mysqli_affected_rows($conn) > 0)
      			{
				echo "<script>alert('SUCCESSFULLY REGISTERED');
        		window.location.href='../login.php';</script>";
				}
				else 
				{
  				echo "<script>alert('Error Occured');</script>";
				}
			}
        }
    }
}
}

?>