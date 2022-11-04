<div class="modal fade" id="edit<?php echo $result['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" >Pass your Work</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="container">

              <?php
               $edit=mysqli_query($conn,"select * from activities where id='".$result['id']."'");
               while ($erow=mysqli_fetch_array($edit)) {
               $title = $erow['title'];
               $subject = $erow['subject'];
               $due_date = $erow['due_date'];


              ?>
               <form method="POST" enctype="multipart/form-data">
                  <div class="icon-box mb-0 p-0">
                  </div>
               

                  <div class="row">

                    <div class="form-group col-md-6">
                      <label>Select Your File:</label>
                      <input type="file" name="file" class="form-control" id = "file">
                    </div>
                    <div>
                 <input type="hidden" class="form-control" name="subject" value="<?php echo $subject; ?>" required="">
                 <input type="hidden" class="form-control" name="title" value="<?php echo $title; ?>" required="">
                  <input type="hidden" class="form-control" name="due_date" value="<?php echo $due_date; ?>" required="">
                    </div>

                   
                  </div>

                  <div class="form-group">
                    <button type="submit" name="submit" class="hvr-pop btn btn-primary">Submit</button>
                  </div>


                </form>
                <?php

              }
            
          
              ?>
                </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<?php
  include "../db_conn.php";
  if (isset($_POST['submit'])) 
    {

    $target_dir = "submitted_activities/";
    $target_file = $target_dir . date("dmYhis") . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if($imageFileType == "docx" ) 
    {
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
      {
      
        $files = date("dmYhis") . basename($_FILES["file"]["name"]);
        $title = $_POST['title'];
        $due_date = $_POST['due_date'];
        $subject = $_POST['subject'];
        $uid = $_SESSION['id'];
        $file = "activities/" . $files;
        $sql1 = "SELECT * FROM submitted_activities WHERE title='$title' && uid='$uid'";
        $result = mysqli_query($conn, $sql1);

          if (mysqli_num_rows($result) == 0) 
          {
          $sqli = "INSERT INTO `submitted_activities` (title, due_date, subject, uid, file) VALUES ('$title', '$due_date', '$subject', '$uid', '{$file}')";
          $result = mysqli_query($conn,$sqli);
          if (mysqli_affected_rows($conn) > 0) 
          {
            echo "<script>alert('Uploaded Successfully');
                window.location.href='classrooms.php';</script>";
          }
          else
          {
            echo "<script>alert('Error Uploading File');
                  window.location.href='classrooms.php';</script>";
            exit;
          }

      }
      else
      {
        echo "<script>alert('Record Already Exists');
        window.location.href='classrooms.php';</script>";
      }

    } 
  }
  else
  {
    echo "<script>alert('File Not Supported! PDF file only please');
      window.location.href=classrooms.php';</script>";
    exit;
  }
}
?>
