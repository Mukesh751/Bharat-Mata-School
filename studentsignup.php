<!DOCTYPE html>
<html>
<?php
include('head.php');
?>
<body>

<?php

if(isset($_POST['studentsignup']))
{
    $name = $_REQUEST['fullname'];
    $admissionnumber = $_REQUEST['admissionnumber'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $fathername = $_REQUEST['fathername'];
    $fatheroccupation = $_REQUEST['fatheroccupation'];
    $mothername = $_REQUEST['mothername'];
    $motheroccupation = $_REQUEST['motheroccupation'];
    $email = $_REQUEST['email'];
    $phonenumber = $_REQUEST['phonenumber'];
    $fulladdress = $_REQUEST['fulladdress'];
    $class = $_REQUEST['class'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmpassword = $_REQUEST['confirmpassword'];
   
    $directoery = "profile_img/";
    $photo = $_FILES['profile_pic']['name'];
    $imageFileType = strtolower(pathinfo( $photo ,PATHINFO_EXTENSION));

    //echo '==='.move_uploaded_file($_FILES['profile_pic']["tmp_name"], $directoery. $_FILES['profile_pic']['name']);

    if(move_uploaded_file($_FILES['profile_pic']["tmp_name"], $directoery. $_FILES['profile_pic']['name']))
{
    if($password != $confirmpassword)
    {
        ?>
        <script>
        alert('Password and Confirm Password does not match');
        window.location.replace('studentsignup.php');
        </script>
        <?php
    }
    else
    {
        $sql = mysqli_query($conn,"INSERT INTO studentdata (fullname, admissionnumber, dob, gender, fathername, fatheroccupation, mothername, motheroccupation, email, phonenumber, fulladdress, class, photo,username, passcode) VALUES 
        ('$name', '$admissionnumber', '$dob', '$gender', '$fathername', '$fatheroccupation', '$mothername', '$motheroccupation', '$email', '$phonenumber', '$fulladdress', '$class', '$photo','$username','$password')");
        
        ?>
        <script>
        alert('Sign Up Successfull');
        window.location.replace('studentlogin.php');
        </script>
        <?php
    }
}
else
 echo "ERROR";
}
?>


  <section class="vh-100 ">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Sign Up Here!!</h3>
              <form action="#" method="post" enctype="multipart/form-data">
  
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="fullName" class="form-control form-control-lg" placeholder="Full Name" name="fullname"/>
                      <label class="form-label" for="fullName"></label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="addno" class="form-control form-control-lg" placeholder="Admission Number" name="admissionnumber"/>
                      <label class="form-label" for="addno"></label>
                    </div>
  
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                    <label for="birthdayDate" class="form-label"></label>
                    <div class="form-outline w-100">
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        id="birthdayDate" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" 
                        name="dob"  
                      />
                     
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <h6 class="mb-2 pb-1">Gender: </h6>
  
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="gender"
                        id="femaleGender"
                        value="female"
                        checked
                      />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="gender"
                        id="maleGender"
                        value="male"
                      />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="gender"
                        id="otherGender"
                        value="other"
                      />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>
  
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="fatherName" class="form-control form-control-lg" placeholder="Father's Name" name="fathername"/>
                      <label class="form-label" for="fatherName"></label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="fatherocc" class="form-control form-control-lg" placeholder="Father's Occupation" name="fatheroccupation"/>
                      <label class="form-label" for="fatherocc"></label>
                    </div>
  
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="motherName" class="form-control form-control-lg" placeholder="Mother's Name" name="mothername" />
                      <label class="form-label" for="firstName"></label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="motherocc" class="form-control form-control-lg" placeholder="Mother's Occupation" name="motheroccupation"/>
                      <label class="form-label" for="motherocc"></label>
                    </div>
  
                  </div>
                </div>

  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="email" id="emailAddress" class="form-control form-control-lg" placeholder="Email" name="email"/>
                      <label class="form-label" for="emailAddress"></label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="tel" id="phoneNumber" class="form-control form-control-lg" placeholder="Phone Number" name="phonenumber"/>
                      <label class="form-label" for="phoneNumber" ></label>
                    </div>
  
                  </div>
                </div>
               
                <div class="row">
                  <div class="col mb-4">
  
                    <div class="form-outline">
                      <textarea id="address" class="form-control form-control-lg" placeholder="Full Address" name="fulladdress" style="height:80px;"></textarea>
                      <label class="form-label" for="address"></label>
                    </div>
  
                  </div>
                </div>
                <div class="row">
                  <div class="col text-center">
  
                    <select class="select form-control-lg" name="class">
                          <?php 
                          $allclass = mysqli_query($conn, "SELECT * FROM classandsubject");
                          foreach($allclass as $value)
                          {
                            ?>
                           <option value="<?php echo $value['class'] ; ?>"> <?php echo $value['class'] ; ?> </option>
                               <?php
                          }
                          ?>
                    </select>
                    <label class="form-label select-label"></label>
  
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-4">
                    <label class="form-label" for="photo"></label>
                    <input type="file" class="form-control form-control-lg"  id="photo" placeholder="Upload Photo"  name="profile_pic"
                    /> 
                  </div>
                </div>
                
                <div class="row">
                  <div class="col mb-2">
  
                    <div class="form-outline">
                      <input type="text" id="username" class="form-control form-control-lg" placeholder="Username" name="username"/>
                      <label class="form-label" for="username"></label>
                    </div>
  
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6">
  
                    <div class="form-outline">
                      <input type="password" id="pass" class="form-control form-control-lg" placeholder="Password" name="password"/>
                      <label class="form-label" for="pass"></label>
                    </div>
  
                  </div> 
                  <div class="col-md-6">
  
                  <div class="form-outline">
                      <input type="password" id="cpass" class="form-control form-control-lg" placeholder="Confirm Password" name="confirmpassword"/>
                      <label class="form-label" for="cpass"></label>
                    </div>
  
                  </div>
                </div>

                <div class="mt-4 text-center">
                  <input class="btn btn-lg btn-primary" type="submit" value="Sign Up" name="studentsignup"/>
                </div>
                
                <div class="row mt-4 pt-2 pl-5 ml-5">
                  <h3>Already a User? <a href="studentlogin.php">Login Here!!</a> </h3>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <style>
   
   body {
   background: linear-gradient(to right, #33ccff 0%, #99ffcc 100%);
}

.btn{
  background: linear-gradient(to right, #33ccff 0%, #99ffcc 100%);
  width:60%;
}
.card{
  background: linear-gradient(135deg, #ff758c 10%, #ff7eb3 100%);
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}
 </style>


      <script>
        
      </script>
</body>
</html>