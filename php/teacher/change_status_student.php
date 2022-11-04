

<?php 

	include "../db_conn.php";
	// echo $_POST['val'];
	// echo $_POST['id'];
	$qry = mysqli_query($conn,"UPDATE `students` set `status` = '".$_POST['val']."' WHERE `id` = '".$_POST['user_id']."' ");

    if ($qry) {
        
        // echo "Success";
        $sql = mysqli_query($conn, "SELECT * FROM `students` WHERE `id` ='".$_POST['user_id']."' ");
    
        $row = mysqli_fetch_assoc($qry);

        echo $row['status'];
    }


?>