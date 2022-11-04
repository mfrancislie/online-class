<?php
include "../db_conn.php";
$sql = "DELETE FROM messages WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) 
{
    echo "<script>alert('Deleted Successfully');
        			window.location.href='inbox.php';</script>";
    
} 
else 
{
    echo "Error deleting Message: " . mysqli_error($conn);
}


?>