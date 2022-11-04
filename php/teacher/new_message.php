
 <div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 100px;">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:#C0C0C0; color: black;">
           <div class="modal-header" style="border:1px solid transparent; background-color: #2E3191; color:white;">
       <!--  <center><h4 class="modal-title" id="myModalLabel">Compose New Message</h4>
         
        </center> -->
          <h4 class="modal-title" id="myModalLabel">New message &nbsp;&nbsp;<i class = "fa fa fa-comment-dots" ></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <div class="container-fluid" style="text-align: left;">
          <form class="form" method="post" action="" enctype="multipart/form-data">
            <label for="subject" 
               class="form-label">Subject:</label>
            <input type="text" name="subject" class="form-control" placeholder="What the topic is about?">
            <label for="receiver" 
               class="form-label">Receiver:</label>
            <input type="text" name="receiver" class="form-control" placeholder="Username of Receiver">
            <label for="message" 
               class="form-label">Message:</label>
            <input type="textarea" 
                 class="form-control" 
                 name="message" 
                 id="message" required="" placeholder="Enter Message Here...">
           
  <br/>
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Cancel</button>
        <button type="submit" name="send" class="btn btn-primary btn-sm">Send</button>
    </form>

              </div>
          </div>
      </div>
    </div>
</div>
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
              window.location.href='messages.php';</script>";
              exit;
        }
        else
        {
          echo "<script>alert('Error Sending a Message');
                window.location.href='messages.php';</script>";
          exit;
        }
  }
?>