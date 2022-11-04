<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Subject</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form  method="POST" enctype="multipart/form-data">
                 <input type="hidden" name="id" id="id">
                   <div class="row">
                        <div class="form-group col-md-12">
                          <label>Subject Code</label>
                          <input name="subject_code" id="subject_code" class="form-control"   type="text" required>

                        
                          <label>Description</label>
                          <textarea name="description" id="description" cols="30" rows="3" class="form-control" required="">
                            
                          </textarea>
                    
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="edit_subject" class="btn btn-primary">Update now</button>
              </div>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<?php  
include "../db_conn.php";
  if(isset($_POST['edit_subject']))
    {   
        $id = $_POST['id'];
        $scode= $_POST['subject_code'];
        $descrip = $_POST['description'];
        

        $query = "UPDATE subject_code SET subject_code='$scode', description='$descrip' WHERE id='$id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
           echo "<script>alert('UPDATE SUCCESSFULLY');
              window.location.href='subject-code.php';</script>";
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>