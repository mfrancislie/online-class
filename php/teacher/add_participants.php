<div class="modal fade" id="addparticipant">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Participants</h4>
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
                      <label>USN</label>
                      <input type="text" class="form-control" name="usn" value="" required="">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Sem-code</label>
                      <select class="form-control" name="sem_code" id= "sem_code"required="">
                      <option value="SY2021">SY2021</option>
                      <option value="SY2022">SY2022</option>
                     </select>
                    </div>
                    

                  </div>                
                
                  <div class="form-group">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="add" class="hvr-pop btn btn-primary" style="background-color:#2E3191;"><i class='fas fa-plus-circle fa-sm text-white-50'></i> Add Now</button>
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
  if (isset($_POST['add'])) 
  {
    $usn = $_POST['usn'];
    $sem_code = $_POST['sem_code'];
    $teacher = $_SESSION['id'];
    $sql = "SELECT * FROM participants WHERE usn='$usn' && subject = '$subject'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) 
    {
         echo "<script>alert('Student already exists');
      window.location.href='classrooms.php';</script>";
      exit;
    }
    else
    {
      $sql1 = "SELECT * FROM students WHERE usn='$usn'";
      $result = mysqli_query($conn, $sql1);
      if (mysqli_num_rows($result) == 1) 
      {
        $sqli = "INSERT INTO `participants` (`subject`, `usn`, `sem_code`) VALUES ('$subject', '$usn', '$sem_code')";
        $result = mysqli_query($conn,$sqli);
        if (mysqli_affected_rows($conn) > 0) 
        {
          echo "<script>alert('Student has been added Successfully');
          window.location.href='subject_classroom.php?subject=Database';</script>";
          exit;
        }
        else
        {
          echo "<script>alert('Error Adding Student');
          window.location.href='classrooms.php';</script>";
          exit;
        }
      }
      else
      {
        echo "<script>alert('Student is not yet registered.');
        window.location.href='classrooms.php';</script>";
        exit;
      }
    }
   


  }
?>