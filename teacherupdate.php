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

<div class="container-fluid pt-3">
        <div class="row text-center">
            <div class="col">

            </div>
          <div class="col">
          <h2>Update Details</h2>
              <form action="" method="post">
            <div class="row pt-2 pl-5 ml-5">
            <input type="text" value = "<?php echo $row['fullname']; ?>" name="fullname" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <input type="text" value = "<?php echo $row['email']; ?>" name="email" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <input type="text" value = "<?php echo $row['phone']; ?>" name="phone" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <input type="text" value = "<?php echo $row['desg']; ?>" name="desg" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <input type="text" value = "<?php echo $row['username']; ?>" name="username" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <input type="password" placeholder="Confirm Password" name="confirmpassword" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <button input type="submit" name="update" class="bt btn-primary">Submit</button>
            </div>
            </form>
          </div>
          <div class="col">

          </div>
        </div>
</div>

<?php
if(isset($_POST['update']))
{
    $name = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $desg = $_REQUEST['desg'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmpassword = $_REQUEST['confirmpassword'];
    if($password != $confirmpassword)
    {
        ?>
        <script>
        alert('Password and Confirm Password does not match');
        </script>
        <?php
    }
    else
    {
        $sqlupdated = mysqli_query($conn,"UPDATE teacherdata SET fullname='$name', email='$email', phone='$phone', desg='$desg', username='$username', passcode='$password' WHERE id = $id2");
     
        ?>
        <script>
        alert('Update Successfull');
        </script>
        <?php
    }
}
?>

<?php include('footer.php') ?>
</body>