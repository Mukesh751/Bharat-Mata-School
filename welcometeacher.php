<?php
session_start();
if($_SESSION['id'] == '')
{ ?>
    <script>
    window.location.replace('teachersignup.php');
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<body>
    <div class = "container text-center pt-3">
    <a href="logout.php"> <div class = "btn btn-primary">Logout</div> </a>
    </div>
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col">
             <p class="display-2 text-center"> <i class="fa fa-user" ></i>  Welcome <?php echo $_SESSION['username']; ?> </p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-3">
        <div class="row">
          <div class="col">
              <h2>Current Details</h2>
               <?php
               $id2 = $_SESSION['id'];
               $sql = mysqli_query($conn, "SELECT * FROM teacherdata where id = $id2");
               $row = mysqli_fetch_assoc($sql);
               echo $row['fullname']. '<br>'. $row['email']. '<br>' . $row['phone'] . '<br>' . $row['desg'] . '<br>' . $row['username'] ;
               ?>
               <!-- student record class add  subject add -->
          </div>

          <div class="col">
              <h2>Update Details</h2>
              <form action="" method="post">
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['fullname']; ?>" name="fullname" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['email']; ?>" name="email" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['phone']; ?>" name="phone" required>
            </div>
            <div class="row pt-2 pl-3">
            <input type="text" value = "<?php echo $row['desg']; ?>" name="desg" required>
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
            <button input type="submit" name="update" class="bt btn-primary">Submit</button>
            </div>
                </form>
           </div>
<?php
if(isset($_POST['update']))
{
    $name = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $desg = $_REQUEST['desg'];
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
        $sqlupdated = mysqli_query($conn,"UPDATE teacherdata SET fullname='$name', email='$email', phone='$phone', desg='$desg', username='$username', passcode='$password' WHERE id = $id2");
     
        ?>
        <script>
        alert('Update Successfull');
        </script>
        <?php
    }
}
?>

          
          <div class="col">
              <h2>Student Details</h2>
              <form method="post">
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
                      <option value="11">Class 11</option>
                      <option value="12">Class 12</option>
                </select>
                <label class="form-label select-label"></label>
                <input class="btn btn-sm btn-primary" type="submit" value="Show" name="showstudents"/>
               </form>
               
               <table class="table table-bordered" style="background:white" >
                    
                        <?php
                            if(isset($_POST['showstudents']))
                         {
                            $showclass = $_REQUEST['class'];
                            $stusql = mysqli_query($conn, "SELECT * FROM studentdata where class = $showclass");
                        //    $sturow = mysqli_fetch_assoc($stusql);
                          ?> <thead> 
                              <tr>
                                
                              <th>sn</th> 
                              <th>Name</th> 
                              <th>Admission Number</th>
                              </tr> 
                              </thead> 
                              <tbody> 
                              <?php
                              $x=1;
                            foreach($stusql as $value)
                                { 
                                    ?>
                                       <tr>
                                        <td><?php echo $x; ?></td>
                                        <td>
                                        <?php  echo $value['fullname']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['admissionnumber']; ?>
                                        </td>
                                        </tr>
                                   <?php $x++;
                                 } ?> 
                       <?php } 
                        ?>
        
                </tbody>
               </table>
          </div>
    <!-- </div>

    <div class="container-fluid pt-3">
      <div class="row"> -->
          <div class="col">
          <h2>Remove Student</h2>
          <form method="post">
              <input type = "text" placeholder = "Enter Student's Full Name" name="studentname">
              <input class="btn btn-sm btn-primary" type="submit" value="Delete" name="deletestudent">
          </form>
          <?php
          if(isset($_POST['deletestudent']))
          {
              $fname = $_REQUEST['studentname'];
              $sqldeleted = mysqli_query($conn, "DELETE FROM studentdata WHERE fullname='$fname'");
              ?><script>alert('Student Deleted');</script><?php
          }
          ?>
         </div>
      <!-- </div> -->
    </div>
</body>
</html>