
<div class="container-fluid">
    <div class="row">
        <div class="col text-center pt-4">
           <img src="images/logo-removebg-preview.png" class="img-fluid" alt="logo"> 
           <p>A C.B.S.E. Affiliated School</p>
       </div>

        <div class="col pt-5">
            <p class="pt-2"> <a href="https://goo.gl/maps/z7sswn7EZ7WG91s5A" target="_blank"><i class="fa fa-map-marker"></i> Kendriya Vidyalaya No.2, Behind Police Station, Jagjiwan Nagar, Dhanbad, Jharkhand 826003</a></p>
            <p><a href="tel:00000000000"><i class="fa fa-phone"></i> 0000000000000 </a></p>
            <p><a href="mailto:bharatmataschool@gmail.com" target="_blank"><i class="fa fa-envelope"></i> bharamataschool@gmail.com </a></p>  
           <div class="row">
            <p class="pl-3"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i> </a></p> 
            <p class="pl-5"><a href="#" target="_blank"><i class="fa fa-twitter"></i> </a></p> 
            <p class="pl-5"><a href="#" target="_blank"><i class="fa fa-instagram"></i> </a></p>
           </div>
       </div>
    </div>
</div>

<nav>
     <div class="container">   
        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
        <ul class="menu">

        <li>
            <label for="drop-1" class="toggle">Profile+</label>
            <a href="#">Profile</a>
            <input type="checkbox" id="drop-1"/>
            <ul>
            <li><a href="sfull.php"> Full Details</a></li>
            <li><a href="studentupdate.php">Update Details</a></li>
            </ul>
        </li>
        <li><a href="studentclassandsubject.php">Class and Subject</a></li> 
          <li><a href="logout.php">Logout</a></li> 
          <li> <span style="color:white"> <h4> <i class="fa fa-user pt-3 pl-5 ml-5" ></i>  Welcome <?php echo $_SESSION['username']; ?> </h4> </span> </li>
    </ul>
     </div>
</nav>
