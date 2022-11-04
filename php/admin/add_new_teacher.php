<div class="modal fade" id="addteacher">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">ADDING NEW TEACHER</h4>
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
                        <div class="form-group col-md-6">
                          <label>USERNAME</label>
                          <input name="username" id="username" class="form-control" type="text" placeholder="ENTER USERNAME" required>
                        </div>

                         <div class="form-group col-md-6">
                          <label>FIRST NAME</label>
                          <input name="firstname" id="firstname" class="form-control" type="text" placeholder="ENTER FIRST NAME" required>
                         </div>


                      </div>                
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label>PASSWORD</label>
                          <input name="password" id="password"  class="form-control" type="password" placeholder="ENTER PASSWORD" required>
                        </div>

                         <div class="form-group col-md-6">
                          <label>LAST NAME</label>
                          <input name="lastname" id="lastname" class="form-control" type="text" placeholder="ENTER LAST NAME" required>
                         </div>

                         <div class="form-group col-md-4">
                          <label>GENDER</label>
                            <select class="form-control" name="gender" id="gender">
                              <option>-Select-</option>
                              <option value="Male" required>Male</option>
                              <option value="Female" required>Female</option>
                            </select>
                         </div>

                          <div class="form-group col-md-8">
                          <label>ADDRESS</label>
                          <input name="address" id="address" class="form-control" type="text" placeholder="ENTER ADDRESS" required>
                         </div>

                         <div class="form-group col-md-6">
                          <label>CONTACT</label>
                          <input name="contacts" id="contacts" class="form-control" type="text" placeholder="ENTER CONTACT NUMBER" required>
                         </div>

                         <div class="form-group col-md-6">
                          <label>EMAIL</label>
                          <input name="email" id="email" class="form-control" type="email" placeholder="ENTER EMAIL" type="email" required>
                         </div>

                      </div>         
                    <div class="form-group">
                 <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                  <button type="submit" name="addnow" class="hvr-pop btn btn-primary"><i class='fas fa-plus-circle fa-sm text-white-50'></i> ADD NOW</button>
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

 if (isset($_POST['addnow'])) 
 {  
  $role = 'teacher';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $contacts = $_POST['contacts'];
  $email = $_POST['email'];
  
$sql = "SELECT * FROM teachers WHERE username='$username'";
  $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) >= 1) 
        {

          echo "<script>alert('Username EXISTS');
          window.location.href='all-teachers.php';</script>";

        }
        else 
        {
          $query = "INSERT INTO teachers(role,username,password,firstname,lastname,gender,address,contacts,email) VALUES ('teacher', '$username' , '$password' , '$firstname', '$lastname', '$gender', '$address', '$contacts', '$email' )";
          $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
           if (mysqli_affected_rows($conn) > 0) 
          {
          $query = "INSERT INTO users(role,username,password,firstname,lastname,gender,address,contacts,email) VALUES ('teacher' , '$username' , '$password' , '$firstname', '$lastname', '$gender', '$address', '$contacts', '$email' )";
            $result = mysqli_query($conn , $query) or die(mysqli_error($conn));

            if (mysqli_affected_rows($conn) > 0)
            {
              echo "<script>alert('SUCCESSFULLY Added');
              window.location.href='all-teachers.php';</script>";
            }
            else 
            {
              echo "<script>alert('Error Occured');</script>";
            }
          }
        }
  }
?>