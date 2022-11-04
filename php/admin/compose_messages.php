<div class="modal fade" id="compose_message">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">COMPOSE NEW MESSAGE</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div class="modal-body">
         
          <form class="form" method="post" action="" enctype="multipart/form-data">
            <label for="subject" 
               class="form-label">Subject:</label>
            <input type="text" name="subject" class="form-control">

            <label for="receiver" 
               class="form-label">Receiver:</label>
            <input type="text" name="receiver" class="form-control" placeholder="Username of Receiver">
            <input type="hidden" name="sender" class="form-control" value="<?php echo $_SESSION['username']; ?>">
            <label for="message" 
               class="form-label">Message:</label>
           <textarea class="form-control" name="message" id="message">
            
           </textarea>          
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="send" class="btn btn-default"style="background: #2E3191;color:white;"><i class="fa fa-envelope"></i> SEND</button>
            </div>

          </div>
        </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


<?php 
include "../db_conn.php";
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
              window.location.href='inbox.php';</script>";
              exit;
        }
        else
        {
          echo "<script>alert('Error Sending a Message');
                window.location.href='inbox.php';</script>";
          exit;
        }
  }
?>