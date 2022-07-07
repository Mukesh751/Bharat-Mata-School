<?php
session_start();
if($_SESSION['id'] == '')
{ ?>
    <script>
    window.location.replace('index.php');
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html>

<?php include('head.php') ?>

<body>
<?php include('welcomeadminnav.php') ?>


              <h2 class="text-center pt-3">Student Details</h2>
             <div class="text-center pt-3">
               
               <table class="table table-bordered table-responsive" style="background:white" >
                    
                        <?php
                            
                            $stusql = mysqli_query($conn, "SELECT * FROM studentdata");
                        //    $sturow = mysqli_fetch_assoc($stusql);
                          ?> <thead> 
                              <tr>
                                
                              <th>S. No.</th> 
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
          </div>

    <?php include('afterlogfooter.php');?>
                                </body>
                                </html>                           