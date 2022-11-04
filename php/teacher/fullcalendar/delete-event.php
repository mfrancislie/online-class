<?php
include "../../db_conn.php";


$id = $_POST['id'];
$sqlDelete = "DELETE from events_teacher WHERE id=".$id;

mysqli_query($conn, $sqlDelete);
echo mysqli_affected_rows($conn);

mysqli_close($conn);
?>