<div class="modal fade" id="addquiz">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" >Add an Activity</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="container">
               <form method="POST" enctype="multipart/form-data">
                  <div class="icon-box mb-0 p-0">
                  </div>
                <input type="hidden" class="form-control" name="subject" value="<?php echo $subject; ?>" required="">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Title:</label>
                      <input type="text" name="title" class="form-control" id = "title" placeholder = "Title"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Due Date:</label>
                      <input type="date" name="due_date" class="form-control" id = "due_date" required>
                     </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Description:</label>
                      <textarea name="description" class="form-control" id = "description" required></textarea>
                     </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Select File:</label>
                      <input type="file" name="file" class="form-control" id = "file">
                    </div>


                  </div>

                  <div class="form-group">
                    <button type="submit" name="submit" class="hvr-pop btn btn-primary">Submit</button>
                  </div>

                </form>
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
    $target_dir = "activities/";
    $target_file = $target_dir . date("dmYhis") . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if($imageFileType == "docx" ) 
    {
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
      {
      
        $files = date("dmYhis") . basename($_FILES["file"]["name"]);
        $title = $_POST['title'];
        $description = $_POST['description'];
        $due_date = $_POST['due_date'];
        $subject = $_POST['subject'];
        $file = "activities/" . $files;
        $sql1 = "SELECT * FROM activities WHERE title='$title'";
        $result = mysqli_query($conn, $sql1);

          if (mysqli_num_rows($result) == 0) 
          {
          $sqli = "INSERT INTO `activities` (title, description, due_date, subject, file) VALUES ('$title', '$description', '$due_date', '$subject','{$file}')";
          $result = mysqli_query($conn,$sqli);
          if (mysqli_affected_rows($conn) > 0) 
          {
            echo "<script>alert('Uploaded Successfully');
                window.location.href='subject_classroom.php?subject=Database';</script>";
          }
          else
          {
            echo "<script>alert('Error Uploading File');
                  window.location.href='subject_classroom.php';</script>";
            exit;
          }

      }
      else
      {
        echo "<script>alert('Record Already Exists');
        window.location.href='subject_classroom.php';</script>";
      }

    } 
  }
  else
  {
    echo "<script>alert('File Not Supported! PDF file only please');
      window.location.href=classroom.php';</script>";
    exit;
  }
}
?>
