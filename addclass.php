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

<div class="container-fluid pt-3">
        <div class="row text-center">
            <div class="col">

            </div>
          <div class="col">
              <h2>Add Class</h2>
               <?php
               $id2 = $_SESSION['id'];
               $sql = mysqli_query($conn, "SELECT * FROM teacherdata where id = $id2");
               $row = mysqli_fetch_assoc($sql);
               
                ?>
            <div class="row">
                <div class="col pt-2">
                <form action="" method="post">
            <div class="row pt-2 pl-5 ml-5">
            <input type="text" placeholder="New Class Name" name="classname" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <button input type="submit" name="add" class="bt btn-primary">Add</button>
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

<?php
if(isset($_POST['add']))
{
    $classname = $_REQUEST['classname'];
 
    
    $sql = mysqli_query($conn,"INSERT INTO classandsubject (class) VALUES 
        ('$classname')");
         
        ?>
        <script>
        alert('New Class Added');
        </script>
        <?php
    
}
?>