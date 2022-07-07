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
              <h2>Current Details</h2>
               <?php
               $id2 = $_SESSION['id'];
               $sql = mysqli_query($conn, "SELECT * FROM teacherdata where id = $id2");
               $row = mysqli_fetch_assoc($sql);
               
                ?>
            <div class="row">
                <div class="col pt-2">
                   <p> Full Name    : </p>
                   <p> Email        : </p>
                   <p> Phone Number : </p>
                   <p> Designation  : </p>
                   <p> User Name    : </p>
                </div>
                <div class="col pt-2">
                    <p><?php echo $row['fullname'];?></p>
                    <p><?php echo $row['email'];?></p>
                    <p><?php echo $row['phone'];?></p>
                    <p><?php echo $row['desg'];?></p>
                    <p><?php echo $row['username'];?></p>
                </div>
            </div>
          </div> 
          <div class="col">

          </div>
        </div>
</div>
<?php include('afterlogfooter.php') ?>
</body>