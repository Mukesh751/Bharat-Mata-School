<?php
session_start();
include('connection.php');

if(isset($_POST['teacherlogin']))
{
    $uname = $_REQUEST['uname'];
    $pass = $_REQUEST['password'];
  
    $sel = mysqli_query($conn, "SELECT * FROM teacherdata WHERE username = '$uname' and passcode = '$pass'");
   
    
    if(mysqli_num_rows($sel)>0)
    {
        $details = mysqli_fetch_assoc($sel);
        $_SESSION['id'] = $details['id'];
        $_SESSION['username'] = $details['username'];
        ?>
        <script>alert('login successfull');
        window.location.replace('welcomet.php');
        </script>
        <?php
    }
    else
    {
        ?>
        <script>alert('wrong id pass');</script>
        <?php
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Login Form </title>
    <style>
body{
    background: linear-gradient(to right, #33ccff 0%, #99ffcc 100%);
}
.container{
    width: 300px;
    background: #fff;
    color: black;
    margin: 220px auto;
    border-radius: 6px;
    padding: 10px 30px;
}
h1{
    text-align: center;
}
input{
    display: block;
    width: 90%;
    padding: 10px;
    font-size: 14px;
    outline: none;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #99ffcc ;
}
button{
    width: 98%;
    border: none;
    outline: none;
    height: 40px;
    border-radius: 5px;
    background: linear-gradient(to right, #33ccff 0%, #99ffcc 100%);
    cursor: pointer;
    color: #fff;
    font-size: 17px;
}
p{
    text-align: center;
}
p a{
    color: linear-gradient(to right, #33ccff 0%, #99ffcc 100%);;
    text-decoration: none;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Teacher's Login</h1>
        <form action="" method="post">
            <input type="text" placeholder="Username" name="uname" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" name="teacherlogin">Submit</button>
        </form>
        <p>
            New User? <a href="teachersignup.php">Signup here!</a>
        </p>
    </div>
</body>
</html>
