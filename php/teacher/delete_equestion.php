<?php
	include "../db_conn.php";
	$sql = "DELETE FROM exam WHERE id='" . $_GET["id"] . "'";
	if (mysqli_query($conn, $sql)) 
	{
    	echo "<script>alert('Deleted Successfully');
        window.location.href='classrooms.php';</script>";
    	unlink($_GET["file"]);
	} 
	else 
	{
    	echo "Error deleting record: " . mysqli_error($conn);
	}
?> 