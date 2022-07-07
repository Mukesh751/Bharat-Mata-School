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
        
          <h2 class="text-center pt-3">Class Details</h2>
          <div class="row justify-content-center">
    <div class="col-auto">
        <div class="text-center pt-3">
          <table class="table table-bordered " style="background:white" >
            
              <thead> 
                              <tr>
                              <th>S. No.</th>
                              <th>Class</th>
                              </tr> 
                              </thead> 
                              <tbody>
                          <?php 
                          $x = 1;
                          $allclass = mysqli_query($conn, "SELECT * FROM classandsubject");
                          foreach($allclass as $cls)
                          {
                            ?>
                            <tr>
                            <td><?php echo $x;?></td>
                            <td><?php echo $cls['class'] ; ?></td>
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