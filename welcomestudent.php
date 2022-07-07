<?php
session_start();
if($_SESSION['id'] == '')
{ ?>
    <script>
    window.location.replace('studentsignup.php');
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html>
<?php include('head.php') ?>

<?php 
$id2 = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM studentdata where id = $id2");
$row = mysqli_fetch_assoc($sql);
?>
<body>
    <div class = "container text-center pt-3">
    <a href="logout.php"> <div class = "btn btn-primary">Logout</div> </a>
    </div>
    <div class="container">
        <div class="row pt-3">
            <div class="col-3" style="margin-left: 150px;">
            <img src="profile_img/<?php echo $row['photo']; ?>" class="img-fluid" alt="studentphoto">
            </div>
            <div class="col">
             <p class="display-2 text-center"> Welcome <?php echo $_SESSION['username']; ?> </p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3">
        <div class="row">
          <div class="col">
              <h2>Current Details</h2>
               <?php
               echo $row['fullname']. '<br>'. $row['admissionnumber']. '<br>' . $row['dob'] . '<br>' . $row['gender'] . '<br>' . $row['fathername'] . '<br>' . $row['fatheroccupation'] . '<br>' . $row['mothername'] . '<br>' . $row['motheroccupation'] . '<br>' .  $row['email']. '<br>' . $row['phonenumber'] . '<br>' . $row['fulladdress'] . '<br>' . $row['class'] . '<br>' . $row['username'] ;
               ?>
               
          </div>

          <div class="col">
              <h2>Update Details</h2>
              <form action="" method="post">
            <div class="row pt-2 pl-3">
            <input type="text" value = <?php echo $row['fullname']; ?> name="fullname" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['admissionnumber']; ?>" name="admissionnumber" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="date" value = "<?php echo $row['dob']; ?>" name="dob" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['gender']; ?>" name="gender" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['fathername']; ?>" name="fathername" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['fatheroccupation']; ?>" name="fatheroccupation" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['mothername']; ?>" name="mothername" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['motheroccupation']; ?>" name="motheroccupation" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['email']; ?>" name="email" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['phonenumber']; ?>" name="phonenumber" required>
            </div>
            <div class="row pt-2 pl-3">
            <textarea id="address" class="form-control form-control-sm"  name="fulladdress" style="height:80px; width:50%;"> <?php echo $row['fulladdress']; ?> </textarea>
            <label class="form-label" for="address"></label>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['class']; ?>" name="class" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['username']; ?>" name="username" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="password" placeholder="Confirm Password" name="confirmpassword" required>
            </div>
            <div class="row pt-2 pl-3">
            <button input type="submit" name="stuupdate" class="bt btn-primary">Submit</button>
            </div>
           </form>
        </div>
<?php
if(isset($_POST['stuupdate']))
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
    if($password != $confirmpassword)
    {
        ?>
        <script>
        alert('Password and Confirm Password does not match');
        </script>
        <?php
    }
    else
    {
        $sqlstuupdated = mysqli_query($conn,"UPDATE studentdata SET fullname='$name', admissionnumber='$admissionnumber', dob='$dob', gender='$gender', fathername='$fathername', fatheroccupation='$fatheroccupation', mothername='$mothername', motheroccupation='$motheroccupation', 
        email='$email', phonenumber='$phonenumber', fulladdress='$fulladdress', class='$class', username='$username', passcode='$password' WHERE id = $id2");
        ?>
        <script>
        alert('Updated');
        </script>
        <?php
    }
}
?>

<?php
               if(isset($_POST['showsubjects']))
               {


                $showclass = $_REQUEST['class'];
                echo '===='.$showclass;
                die();
                if($showclass<=5)
                {
                   echo 'English'.'<br>'.'Hindi'.'<br>'.'Maths'.'<br>'.'Science'.'<br>'.'Social Science';
                }
                else if($showclass>5 && $showclass<=8)
                {
                    echo 'English'.'<br>'.'Hindi'.'<br>'.'Maths'.'<br>'.'Science'.'<br>'.'Social Science'.'<br>'.'Sanskrit';
                }
                else if($showclass==9 || $showclass==10)
                {
                    echo 'English'.'<br>'.'Maths'.'<br>'.'Science'.'<br>'.'Social Science'.'<br>'.'Sanskrit/Hindi';
                }
                else if($showclass==11 || $showclass==14)
                {
                    echo 'English'.'<br>'.'Maths'.'<br>'.'Physics'.'<br>'.'Chemistry'.'<br>'.'CS/PE/Bio';
                }
                else if($showclass==12 || $showclass==15)
                {
                    echo 'English'.'<br>'.'Biology'.'<br>'.'Physics'.'<br>'.'Chemistry'.'<br>'.'Hindi/IP/Maths';
                }
                else if($showclass==13 || $showclass==16)
                {
                    echo 'English'.'<br>'.'Accountancy'.'<br>'.'Business Studies'.'<br>'.'Economics'.'<br>'.'IP/Maths';
                }
                else
                  echo "wrong input";
               } 
               ?>
    <div class="col">
              <h2>Subject Details</h2>
              <form action="" method="get">
                <select class="select form-control-sm" name="class">
                      <option value="1">Class 1</option>
                      <option value="2">Class 2</option>
                      <option value="3">Class 3</option>
                      <option value="4">Class 4</option>
                      <option value="5">Class 5</option>
                      <option value="6">Class 6</option>
                      <option value="7">Class 7</option>
                      <option value="8">Class 8</option>
                      <option value="9">Class 9</option>
                      <option value="10">Class 10</option>
                      <option value="11">Class 11 Maths</option>
                      <option value="12">Class 11 Bio</option>
                      <option value="13">Class 11 Commerce</option>
                      <option value="14">Class 12 Maths</option>
                      <option value="15">Class 12 Bio</option>
                      <option value="16">Class 12 Commerce</option>
                </select>
                <label class="form-label select-label"></label>
                <input class="btn btn-sm btn-primary" type="submit" value="Show" name="showsubjects">
               </form>
    </div>
             
    </div>
</div>
</body>
</html>