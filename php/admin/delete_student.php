<?php
include "../db_conn.php";
$sql = "DELETE FROM students WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) 
{
    echo "<script>alert('Deleted Successfully');
        			window.location.href='all-students.php';</script>";
    
} 
else 
{
    echo "Error deleting user: " . mysqli_error($conn);
}


?>