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
<?php include('welcometnav.php') ?>

               <?php
               $id2 = $_SESSION['id'];
               $sql = mysqli_query($conn, "SELECT * FROM teacherdata where id = $id2");
               $row = mysqli_fetch_assoc($sql);
               
                ?>


              <h2 class="text-center pt-3">Student Details</h2>
             <div class="text-center pt-3">
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
               
               <table class="table table-bordered table-responsive" style="background:white" >
                    
                        <?php
                            if(isset($_POST['showstudents']))
                         {
                            $showclass = $_REQUEST['class'];
                            $stusql = mysqli_query($conn, "SELECT * FROM studentdata where class = $showclass");
                        //    $sturow = mysqli_fetch_assoc($stusql);
                          ?> <thead> 
                              <tr>
                                
                              <th>sn</th> 
                              <th>Photo</th>
                              <th>Name</th> 
                              <th>Admission Number</th>
                              <th>Gender</th>
                              <th>Father's Name</th>
                              <th>Mother's Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Address</th>
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
                                        <td><img src="profile_img/<?php echo $value['photo']; ?>" class="img-fluid" alt="studentphoto">
                                        </td>
                                        <td>
                                        <?php  echo $value['fullname']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['admissionnumber']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['gender']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['fathername']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['mothername']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['email']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['phonenumber']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['fulladdress']; ?>
                                        </td>
                                        </tr>
                                   <?php $x++;
                                 } ?> 
                       <?php } 
                    ?>
        
                </tbody>
               </table>
          </div>
                                
    

          <table class="table table-bordered table-responsive" style="background:white" >
                    
                    <?php
                        $stusql = mysqli_query($conn, "SELECT * FROM studentdata where teacherId = $id2");
                    //    $sturow = mysqli_fetch_assoc($stusql);
                      ?> <thead> 
                          <tr>
                            
                          <th>sn</th> 
                          <th>Photo</th>
                          <th>Name</th> 
                          <th>Admission Number</th>
                          <th>Gender</th>
                          <th>Father's Name</th>
                          <th>Mother's Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
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
                                    <td><img src="profile_img/<?php echo $value['photo']; ?>" class="img-fluid" alt="studentphoto">
                                    </td>
                                    <td>
                                    <?php  echo $value['fullname']; ?>
                                    </td>
                                    <td>
                                    <?php  echo $value['admissionnumber']; ?>
                                    </td>
                                    <td>
                                    <?php  echo $value['gender']; ?>
                                    </td>
                                    <td>
                                    <?php  echo $value['fathername']; ?>
                                    </td>
                                    <td>
                                    <?php  echo $value['mothername']; ?>
                                    </td>
                                    <td>
                                    <?php  echo $value['email']; ?>
                                    </td>
                                    <td>
                                    <?php  echo $value['phonenumber']; ?>
                                    </td>
                                    <td>
                                    <?php  echo $value['fulladdress']; ?>
                                    </td>
                                    </tr>
                               <?php $x++;
                             } ?> 
                   
    
            </tbody>
           </table>

<?php include('afterlogfooter.php') ?>
</body>