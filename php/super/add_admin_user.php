<div class="modal fade" id="addadmin">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">ADDING NEW SYSTEM USER</h4>
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
        <label>ROLE</label>
          <select class="form-control" name="role" id="role">
            <option>-SELECT-</option>
            <option value="super" required>SUPER ADMIN</option>
            <option value="admin" required>ADMIN</option>
            <option value="student" required>STUDENT</option>
            <option value="teacher" required>TEACHER</option>
          </select>
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
<button type="submit" name="add_new" class="hvr-pop btn btn-primary"><i class='fas fa-plus-circle fa-sm text-white-50'></i> ADD NOW</button>
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

 if (isset($_POST['add_new'])) 
 {  
  $role = $_POST['role'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $contacts = $_POST['contacts'];
  $email = $_POST['email'];
  

  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 0)
        {

          $query= "INSERT INTO `users` (`id`, `role`, `username`, `password`, `firstname`, `lastname`, `gender`, `address`, `contacts`, `email`, `registered_at`, `updated_at`) VALUES (NULL, '$role', '$username', '$password', '$firstname', '$lastname', '$gender', '$address', '$contacts', '$email', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
          $result = mysqli_query($conn , $query) or die(mysqli_error($conn)); 
            if (mysqli_affected_rows($conn) > 0)
            {
              echo "<script>alert('SUCCESSFULLY REGISTERED');
              window.location.href='all_users.php';</script>";
            }
            else 
            {
              echo "<script>alert('Error Occured');</script>";
            }
         

        }
        else 
        {
          echo "<script>alert('Username Exists');
          window.location.href='all_users.php';</script>";
            
        }

}

?>