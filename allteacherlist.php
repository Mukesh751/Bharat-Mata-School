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


              <h2 class="text-center pt-3">Teacher Details</h2>
              <div class="container-fluid">
              <div class="row justify-content-center">
                  <div class="col-auto">
               <table class="table table-bordered table-responsive " style="background:white;" >
                    
                        <?php
                            
                
                            $stusql = mysqli_query($conn, "SELECT * FROM teacherdata");
                        //    $sturow = mysqli_fetch_assoc($stusql);
                          ?> <thead> 
                              <tr>
                                
                              <th>S. No.</th> 
                              <th>Name</th> 
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Designation</th>
                              <th>Username</th>
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
                                        <?php  echo $value['email']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['phone']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['desg']; ?>
                                        </td>
                                        <td>
                                        <?php  echo $value['username']; ?>
                                        </td>
                                        </tr>
                                   <?php $x++;
                                 } ?> 
        
                </tbody>
               </table>
          </div>
                                </div>
                                </div>
                                <?php include('afterlogfooter.php');?>
                                </body>
                                </html>                           

