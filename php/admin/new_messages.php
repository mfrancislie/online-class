<?php 
include "../db_conn.php";

        $edit=mysqli_query($conn,"select * from messages where id='".$row['id']."'");
        $erow=mysqli_fetch_array($edit);
 
if (isset($_POST['send'])) 
{
      $subject = $_POST['subject'];
       $message = $_POST['message'];
      $receiver = $_POST['receiver'];
      $sender = $_POST['sender'];
        $sqli = "INSERT INTO `messages` (subject, message, receiver, sender) VALUES ('$subject', '$message', '$receiver', '$sender')";
      $result = mysqli_query($conn,$sqli);
        if (mysqli_affected_rows($conn) > 0) 
        {
          echo "<script>alert('Sent Successfully');
              window.location.href='compose_messages.php';</script>";
              exit;
        }
        else
        {
          echo "<script>alert('Error Sending a Message');
                window.location.href='compose_messages.php';</script>";
          exit;
        }
  }
?>