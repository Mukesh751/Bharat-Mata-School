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

<div class="container-fluid pt-3">
        
          <h2 class="text-center pt-3">Subject Details</h2>
        <div class="text-center pt-2">
          <form action="" method="post">
                <select class="select form-control-lg" name="class" required>
              <option value="0"> Select Class </option>
                          <?php 
                          $allclass = mysqli_query($conn, "SELECT * FROM classandsubject");
                          foreach($allclass as $cls)
                          {
                            ?>
                           <option value="<?php echo $cls['id'] ; ?>"> <?php echo $cls['class'] ; ?> </option>
                               <?php
                          }
                          ?>
                </select>
              <button type="submit" class="btn btn-primary " name="showsub">Show</button>
            </form>
        </div>
          <div class="row justify-content-center">
    <div class="col-auto">
        <div class="text-center pt-3">
          <table class="table table-bordered " style="background:white" >
            
              <thead> 
                              
                          <?php
                        if(isset($_POST['showsub']))
                        { 
                          $x=1;
                            ?>
                            <tr>
                              <th>S. No.</th>
                              <th>Subjects</th>
                              </tr> 
                              </thead> 
                              <tbody>
                            <?php
                          $classId = $_REQUEST['class'];
                          $allsubjects = mysqli_query($conn, "SELECT * FROM subjecttable WHERE classId = $classId");
                          foreach($allsubjects as $sub)
                          {
                            ?>
                            <tr>
                            <td><?php echo $x ; ?></td>
                            <td><?php echo $sub['subjectName'] ; ?></td>
                            </tr>
                            <?php $x++;
                          }
                          
                        }?>
                    </tbody>
                </thead>
            
            </table>
            </div>
          </div> 
      </div>
</div>
<?php include('afterlogfooter.php') ?>
</body>
</html>