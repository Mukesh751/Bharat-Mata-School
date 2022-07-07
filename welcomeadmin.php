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

<?php include('welcomeadminnav.php') ?>

<h2 class="text-center pt-4">Bharat Mata School Welcomes You!!!</h2>

</div>
<?php include('afterlogfooter.php') ?>
</body>