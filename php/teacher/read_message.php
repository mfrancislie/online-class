
 <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: white;">
      <div class="modal-header bg-gradient-success">
       <center><h4 class="modal-title text-black" id="myModalLabel">Message</h4></center>
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body text-black">
      <?php
        $edit=mysqli_query($conn,"select * from messages where id='".$row['id']."'");
        $erow=mysqli_fetch_array($edit);
      ?>
       
            <h4 class="card-description"><br/><?php echo $erow['message']; ?></h4>
        <br/><br/>
     
        <h6><i>Sent On: <?php echo $erow['time_sent']; ?></i></h6>
         


              </div>
          </div>
      </div>
    </div>
</div>
<?php 
include "../db_conn.php";
if (isset($_POST['edit'])) 
{
  $target_dir = "posts/";
  $target_file = $target_dir . date("dmYhis") . basename($_FILES["file"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  if($imageFileType == "jpg" ) 
  {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
    {
      $id=$_POST['id'];
      $files = date("dmYhis") . basename($_FILES["file"]["name"]);
      $subject = $_POST['subject'];
      $detail = $_POST['detail'];
      $start_at = $_POST['start_at'];
      $end_at = $_POST['end_at'];
      $posted_by = $_SESSION['id'];
      $file = "posts/" . $files;
      $sql1 = "SELECT * FROM posts WHERE subject='$subject'";
          $result = mysqli_query($conn, $sql1);

          if (mysqli_num_rows($result) == 0) 
          {
          $sqli = "UPDATE `posts` SET subject = '$subject', detail = '$detail', pic = '{$file}', posted_by ='$posted_by' , start_at ='$start_at', end_at='$end_at' WHERE id='$id'";
          $result = mysqli_query($conn,$sqli);
          $change=$_POST["id"];
        if (mysqli_affected_rows($conn) > 0) 
        {
          echo "<script>alert('Updated Successfully');
              window.location.href='posts.php';</script>";
        }
        else
        {
          echo "<script>alert('Error Updating Event/Announcement');
                window.location.href='posts.php';</script>";
          exit;
        }

          }
          else
          {
        echo "<script>alert('Post with the same subject exists!');
            window.location.href='posts.php';</script>";
      }

    } 
  }
  else
  {
    echo "<script>alert('File Not Supported! with JPG extension only please');
      window.location.href='posts.php';</script>";
    exit;
  }

}
?>