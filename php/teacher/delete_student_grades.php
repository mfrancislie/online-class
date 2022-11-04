<?php
include "../db_conn.php";
$sql = "DELETE FROM participants WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) 
{
    echo "<script>alert('Deleted Successfully');
        			window.location.href='subject_classroom.php?subject=Database';</script>";
    
} 
else 
{
    echo "Error deleting user: " . mysqli_error($conn);
}


?>