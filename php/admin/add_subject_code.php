<div class="modal fade" id="adds-code">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Subject</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="container">
               <form  method="POST" enctype="multipart/form-data">
                <div class="icon-box mb-0 p-0">
                             
                </div>
                   <div class="row">
                        <div class="form-group col-md-12">
                          <label>Subject Code</label>
                          <input name="subject_code" id="subject_code" class="form-control"   type="text" required>

                        
                          <label>Description</label>
                          <textarea name="description" id="description" cols="30" rows="3" class="form-control" required="">
                            
                          </textarea>
                    
                <div class="form-group" style="margin-top: 5vh;">
                 <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                  <button type="submit" name="add_subject" class="hvr-pop btn btn-primary"><i class='fas fa-plus-circle fa-sm text-white-50'></i> Add now</button>
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

 if (isset($_POST['add_subject'])) 
 {  
  
  $scode = $_POST['subject_code'];
  $descrip = $_POST['description'];
  
  $query = "INSERT INTO `subject_code`(`subject_code`, `description`) VALUES ('$scode', '$descrip')";
    $result = mysqli_query($conn , $query) or die(mysqli_error($conn));

    if (mysqli_affected_rows($conn) > 0)
    {
      echo "<script>alert('SUCCESSFULLY Added');
      window.location.href='subject-code.php';</script>";
    }
    else 
    {
      echo "<script>alert('Error Occured');
       window.location.href='http://localhost/classonline/php/admin/subject-code.php';</script>";

    }
  }

?>