<?php 
   session_start();
   include "../db_conn.php";
     

   if (isset($_POST['msg_delete_btn'])) {
     
     $all_id = $_POST['msg_delete_id'];
     $extract_id = implode(',', $all_id);
     // echo $extract_id;


     $query = "DELETE FROM messages WHERE id IN($extract_id)";
     $query_run = mysqli_query($conn, $query);

     echo header("Location: inbox.php");

   }
 ?>