<!DOCTYPE html>
<head>
    <title>Signup Form </title>
    <style>
body{
    background: linear-gradient(to right, #33ccff 0%, #99ffcc 100%);
}
.container{
    width: 300px;
    background: #fff;
    color: black;
    margin: 150px auto;
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
        <h1>Sign Up</h1>
        <form action="" method="post">
            <input type="text" placeholder="Fullname" name="fullname" required>
            <input type="text" placeholder="Email" name="email" required>
            <input type="text" placeholder="Phone" name="phone" required>
            <input type="text" placeholder="Designation" name="desg" required>
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Confirm Password" name="confirmpassword" required>
            <button input type="submit" name="teachersignup">Submit</button>
        </form>
        <p>
            Already a User? <a href="teacherlogin.php">Login here!</a>
        </p>
    </div>
</body>
</html>

<?php
include('connection.php');
if(isset($_POST['teachersignup']))
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
        window.location.replace('teachersignup.php');
        </script>
        <?php
    }
    else
    {
        $sql = mysqli_query($conn,"INSERT INTO teacherdata (fullname, email, phone, desg, username, passcode) VALUES ('$name', '$email', '$phone', '$desg', '$username', '$password')");
        
        ?>
        <script>
        alert('Sign Up Successfull');
        window.location.replace('teacherlogin.php');
        </script>
        <?php
    }
}
?>