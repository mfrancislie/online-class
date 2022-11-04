<style type="text/css">
  input[type="checkbox"]{
    width: 20px;
    height: 20px;
    border-radius:4px;
    border:1px solid #AAAEB4; 

  }
  .form-group1 label{
    margin:0 10px;
  }
</style>
<div class="modal fade" id="addstudent">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">ENROLL NEW STUDENT</h4>
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
                      <label>USN</label>
                      <input name="usn" id="usn" class="form-control" type="text" placeholder="ENTER USN" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>USERNAME</label>
                      <input name="username" id="username" class="form-control" type="text" placeholder="ENTER USERNAME" required>
                    </div>

                  </div>                
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>PASSWORD</label>
                      <input name="password" id="password"  class="form-control" type="password" placeholder="ENTER PASSWORD" required>
                    </div>

                     <div class="form-group col-md-6">
                      <label>FIRST NAME</label>
                      <input name="firstname" id="firstname" class="form-control" type="text" placeholder="ENTER FIRST NAME" required>
                     </div>

                     <div class="form-group col-md-6">
                      <label>LAST NAME</label>
                      <input name="lastname" id="lastname" class="form-control" type="text" placeholder="ENTER LAST NAME" required>
                     </div>

                     <div class="form-group col-md-4">
                      <label>GENDER</label>
                        <select class="form-control" name="gender" id="gender">
                          <option>-SELECT-</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                     </div>

                     <div class="form-group col-md-4">
                      <label>COURSE</label>
                        <select class="form-control" name="course" id="course" required>
                          <option>-SELECT-</option>
                          <option value="BSIT">BS-Computer Information</option>
                          <option value="Female">BS-Education</option>
                        </select>
                     </div>

                     <div class="form-group col-md-4">
                      <label>YEAR LEVEL</label>
                      <select class="form-control" name="year" id="year" required>
                        <option selected value="1st">First Year</option>
                        <option value="2nd">Second Year</option>
                        <option value="3rd">Third Year</option>
                        <option value="4th">Fourth Year</option>
                      </select>
                     </div>

                      <div class="form-group col-md-3">
                      <label>Description</label>
                      <select class="form-control" name="description" id="description" required>
                        <option selected value="1st Yr - 1st Semester">1st Semester</option>
                        <option value="1st Yr - 2nd Sem">1st Yr - 2nd Semester</option>
                        <option value="2nd Yr - 1st Sem">2nd Yr - 1st Semester</option>
                        <option value="2nd Yr - 2nd Sem">2nd Yr - 2nd Semester</option>
                        <option value="3rd Yr - 1nd Sem">3rd Yr - 1st Semester</option>
                        <option value="3rd Yr - 2nd Sem">3rd Yr - 2nd Semester</option>
                        <option value="4th Yr - 1nd Sem">4th Yr - 1st Semester</option>
                        <option value="4th Yr - 2nd Sem">4th Yr - 2nd Semester</option>
                      </select>
                     </div>

    
 
                      <div class="form-group col-md-6">
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

                  <div class="form-group1 col-md-6">
                  <label>SELECT SUBJECTS</label>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="subject[]" value="Capstone">
                          <label class="form-check-label">CAPSTONE</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="subject[]"value="Sytem Analysis and Design">
                          <label class="form-check-label">SYSTEM ANALYSIS AND DESIGN</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="subject[]" value="Physical Education">
                          <label class="form-check-label">PHYSICAL EDUCATION</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="subject[]" width="40" value="Soft Eng">
                          <label class="form-check-label">
                            SOFT ENG
                          </label>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="form-group">
                   <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                    <button type="submit" name="add" class="hvr-pop btn btn-primary"><i class='fas fa-plus-circle fa-sm text-white-50'></i> ADD NOW</button>
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
  $role = 'student';
  $usn = $_POST['usn'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $course = $_POST['course'];
  $year = $_POST['year'];
  $description = $_POST['description'];
  $address = $_POST['address'];
  $contacts = $_POST['contacts'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $status = '1';



  $sql = "SELECT * FROM students WHERE username='$username' OR usn='$usn'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) >= 1) 
        {

          echo "<script>alert('USername or USN EXISTS');
          window.location.href='all-students.php';</script>";

        }
        else 
        {
          $query = "INSERT INTO students(role,usn,username,password,firstname,lastname,gender,course,year,description, address,contacts,email,status) VALUES ('student', '$usn' , '$username' , '$password' , '$firstname', '$lastname', '$gender' , '$course' , '$year', '$description', '$address', '$contacts', '$email', '1' )";
          $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
        }
          
        if (mysqli_affected_rows($conn) > 0) 
          {

          foreach ($subject as $subjects) {

             $query = "INSERT INTO `subjects`(`name`, `year`, `course`) VALUES ('$subjects', '$year', '$course')";
            $result = mysqli_query($conn , $query) or die(mysqli_error($conn)); 
          }

          if (mysqli_affected_rows($conn) > 0)
            {
              echo "<script>alert('SUCCESSFULLY Added');
              window.location.href='all-students.php';</script>";
            }
            else 
            {
              echo "<script>alert('Error Occured');</script>";
            }
         } 
  }

?>