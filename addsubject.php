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

<?php
if(isset($_POST['add']))
{
    $subjectname = $_REQUEST['subjectname'];
    $class = $_REQUEST['class'];
    
     $check = mysqli_query($conn, "SELECT * FROM subjecttable WHERE subjectName = '$subjectname' AND classId = '$class'");
    
    if(mysqli_num_rows($check)>0)
    {
       ?>
        <script>
        alert('Duplicate Value Found');
        </script>
        <?php
    }
   else
       {
        $sql = mysqli_query($conn,"INSERT INTO subjecttable (subjectName,classId) VALUES 
        ('$subjectname','$class')");
         
        ?>
        <script>
        alert('New Subject Added');
        </script>
        <?php
       }
}
?>
<body>

<?php include('welcometnav.php') ?>

<div class="container-fluid pt-3">
        <div class="row text-center">
            <div class="col">

            </div>
          <div class="col">
              <h2>Add Subject</h2>
              
             
                   
            <div class="row">
              <div class="col pt-2">
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
                      <div class="row pt-2 pl-5 ml-5">
                         <input type="text" placeholder="New Subject Name" name="subjectname" required>
                      </div>
                     <div class="row pt-2 pl-5 ml-5">
                         <button type="submit" name="add" class="bt btn-primary">Add</button>
                     </div>
                 </form>
                </div>
            </div>
            
          </div> 
          <div class="col">

          </div>
        </div>
</div>
<?php include('afterlogfooter.php') ?>
</body>
