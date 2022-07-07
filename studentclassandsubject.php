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

<?php include('welcomesnav.php') ?>

<div class="container-fluid pt-3">
        
          <h2 class="text-center pt-3">Class and Subject Details</h2>
        <div class="text-center pt-2">
                <h2>Class : <?php echo $row['class']; ?></h2>
        </div>
          <div class="row justify-content-center">
    <div class="col-auto">
        <div class="text-center pt-3">
          <table class="table table-bordered " style="background:white" >
            
              <thead> 
                              
                          <?php
                        
                         
                          $x=1;
                            ?>
                            <tr>
                              <th>S. No.</th>
                              <th>Subjects</th>
                              </tr> 
                              </thead> 
                              <tbody>
                            <?php
                          $classId = $row['class'];
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
                          
                        ?>
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