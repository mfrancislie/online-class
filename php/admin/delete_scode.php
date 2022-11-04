<?php
include "../db_conn.php";
$sql = "DELETE FROM subject_code WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) 
{
    echo "<script>alert('Deleted Successfully');
        			window.location.href='http://localhost/classonline/php/admin/subject-code.php';</script>";
    
} 
else 
{
    echo "Error deleting user: " . mysqli_error($conn);
}


?>