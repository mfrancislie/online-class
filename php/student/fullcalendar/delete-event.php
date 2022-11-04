<?php
include "../../db_conn.php";

$id = $_POST['id'];
$sqlDelete = "DELETE from stud_calendar WHERE id=".$id;

mysqli_query($conn, $sqlDelete);
echo mysqli_affected_rows($conn);

mysqli_close($conn);
?>