<!DOCTYPE html>
<html>
<?php
include('head.php');
?>
<body>

<?php
include('nav.php');
?>
   

  <div class="container-fluid pt-3">
      <h2 class="text-center text-danger">Our Gallery</h2>
  </div>

  <div class="container">
    <div class="row">
      
          <div class="col py-2">
              <div class="video"><iframe src="https://www.youtube.com/embed/AWdA7hdP4ZA?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
        </div>
          <div class="col py-2">
            <div class="video"><iframe src="https://www.youtube.com/embed/I39RKjerJss?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
      </div>
          <div class="col py-2">
              <div class="video"><iframe src="https://www.youtube.com/embed/Dkx4LYeFnVY?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
      </div>
    </div>
  </div> 

  <div class="container">
    <div class="row">
      
          <div class="col py-2">
              <div class="video"><iframe src="https://www.youtube.com/embed/AWdA7hdP4ZA?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
        </div>
          <div class="col py-2">
            <div class="video"><iframe src="https://www.youtube.com/embed/I39RKjerJss?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
      </div>
          <div class="col py-2">
              <div class="video"><iframe src="https://www.youtube.com/embed/Dkx4LYeFnVY?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
      </div>
    </div>
  </div> 


  <style>
   
    .video {
     height: 0;
     position: relative;
     padding-bottom: 56.25%; /* Если видео 16/9, то 9/16*100 = 56.25%. Также и с 4/3 - 3/4*100 = 75% */
 }
 .video iframe {
     position: absolute;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
 }
 
  </style>

<?php
include('footer.php');
?>

</body>
</html>