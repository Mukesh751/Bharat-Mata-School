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

<body>

<?php include('welcomesnav.php') ?>

<div class="container-fluid pt-3">
        <div class="row text-center">
            <div class="col">

            </div>
          <div class="col">
              <h2>Complete Details</h2>
               <?php
               $id2 = $_SESSION['id'];
               $sql = mysqli_query($conn, "SELECT * FROM studentdata where id = $id2");
               $row = mysqli_fetch_assoc($sql);
               
                ?>
            <div class="row">
                <div class="col pt-2">
                   <p> Full Name                : </p>
                   <p> Admission Number         : </p>
                   <p> Date of Birth            : </p>
                   <p> Gender                   : </p>
                   <p> Father's Name            : </p>
                   <p> Father's Ocuupation      : </p>
                   <p> Mother's Name            : </p>
                   <p> Mother's Ocuupation      : </p>
                   <p> Email                    : </p>
                   <p> Phone Number             : </p>
                   <p> Full Address             : </p>
                   <p> Class                    : </p>
                   <p> User Name                : </p>
                   <p> Profile Photo            : </p>
                </div>
                <div class="col pt-2">
                    <p><?php echo $row['fullname'];?></p>
                    <p><?php echo $row['admissionnumber'];?></p>
                    <p><?php echo $row['dob'];?></p>
                    <p><?php echo $row['gender'];?></p>
                    <p><?php echo $row['fathername'];?></p>
                    <p><?php echo $row['fatheroccupation'];?></p>
                    <p><?php echo $row['mothername'];?></p>
                    <p><?php echo $row['motheroccupation'];?></p>
                    <p><?php echo $row['email'];?></p>
                    <p><?php echo $row['phonenumber'];?></p>
                    <p><?php echo $row['fulladdress'];?></p>
                    <p><?php echo $row['class'];?></p>
                    <p><?php echo $row['username'];?></p>
                    <p><img src="profile_img/<?php echo $row['photo']; ?>" class="img-fluid" alt="studentphoto"></p>           
                </div>
            </div>
          </div> 
          <div class="col">

          </div>
        </div>
</div>
<?php include('afterlogfooter.php') ?>
</body>