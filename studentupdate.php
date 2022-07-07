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

<?php
               $id2 = $_SESSION['id'];
               $sql = mysqli_query($conn, "SELECT * FROM studentdata where id = $id2");
               $row = mysqli_fetch_assoc($sql);
               
 ?>


<?php
if(isset($_POST['update']))
{
    $fatheroccupation = $_REQUEST['fatheroccupation'];
    $motheroccupation = $_REQUEST['motheroccupation'];
    $email = $_REQUEST['email'];
    $phonenumber = $_REQUEST['phonenumber'];
    $fulladdress = $_REQUEST['fulladdress'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmpassword = $_REQUEST['confirmpassword'];
   
    if($password != $confirmpassword)
    {
        ?>
        <script>
        alert('Password and Confirm Password does not match');
        window.location.replace('studentsignup.php');
        </script>
        <?php
    }
    else
    {
        $sql = mysqli_query($conn,"UPDATE studentdata SET fatheroccupation = '$fatheroccupation', motheroccupation =  '$motheroccupation', email='$email', phonenumber = '$phonenumber', fulladdress = '$fulladdress', username = '$username', passcode = '$password' WHERE id = $id2");        
        ?>
        <script>
        alert('Update Successful');
        </script>
        <?php
    }
}
?>


<<div class="container-fluid pt-3">
        <div class="row text-center">
            <div class="col">

            </div>
          <div class="col">
          <h2>Update Details</h2>
              <form action="" method="post">
            <div class="row pt-2 pl-5 ml-5">
            <input type="text" value = "<?php echo $row['fatheroccupation']; ?>" name="fatheroccupation" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <input type="text" value = "<?php echo $row['motheroccupation']; ?>" name="motheroccupation" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <input type="text" value = "<?php echo $row['email']; ?>" name="email" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <input type="text" value = "<?php echo $row['phonenumber']; ?>" name="phone" required>
            </div>
            <div class="row pt-2 pl-5 ml-5">
            <textarea id="address" class="form-control form-control-sm"  name="fulladdress" style="height:80px; width:50%;"> <?php echo $row['fulladdress']; ?> </textarea>
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
<?php include('afterlogfooter.php') ?>
</body>
</html>