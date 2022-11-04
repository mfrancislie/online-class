<div class="modal fade" id="classroom">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Create Classroom</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="container">
               <form method="POST" enctype="multipart/form-data">
                  <div class="icon-box mb-0 p-0">  
                  </div>
               <div class="row">
                    <div class="form-group col-md-6">
                      <label>Subject</label>
                      <input name="subject" id="subject" class="form-control" type="text" placeholder="Enter Subject" required>
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
                    <button type="submit" name="create" class="hvr-pop btn btn-primary"><i class='fas fa-save fa-sm text-white-50'></i> Create Now</button>
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
  if (isset($_POST['create'])) 
  {
  
    $subject = $_POST['subject'];
    $sem_code = $_POST['sem_code'];
    $teacher = $_SESSION['id'];
    $sql = "SELECT * FROM classrooms WHERE subject='$subject'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) 
    {
         echo "<script>alert('Classroom with the same subject already exist');
      window.location.href='classrooms.php';</script>";
      exit;
    }
    else
    {
      $sqli = "INSERT INTO `classrooms` (`subject`, `teacher`, `sem_code`) VALUES ('$subject', '$teacher', '$sem_code')";
      $result = mysqli_query($conn,$sqli);
      if (mysqli_affected_rows($conn) > 0) 
        {
          echo "<script>alert('Classroom has been created Successfully');
          window.location.href='classrooms.php';</script>";
          exit;
        }
      else
        {
          echo "<script>alert('Error Creating Classroom');
          window.location.href='classrooms.php';</script>";
          exit;
        }
    }
   


  }
?>
