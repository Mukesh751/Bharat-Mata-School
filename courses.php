<!DOCTYPE html>
<html>
<?php
include('head.php');
?>
<body>

<?php
include('nav.php');
?>
  
  
  <div class="container">
        <h2 class="pt-3 text-danger text-center">Our Courses</h2> 
  </div>

  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 card-container">
        <div class="card card-flip">
          <div class="front card-block">
            <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
            <span class="card-img-top fa" style="font-size: 4em">&#xf118;</span>
            <h4 class="card-title">Primary Classes</h4>
            <h6 class="card-subtitle text-muted">Classes 1 to 5</h6>
            <p class="card-text"></p>
          </div>
          <div class="back card-block">
            <p>
                English
                <br> Hindi
                <br> Maths
                <br> Science
                <br> Social Science
                <br> 
                <br>
                <br>
            </p>
            <a href="#" class="btn btn-outline-primary">Enroll Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 card-container">
        <div class="card card-flip">
          <div class="front card-block">
            <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
            <span class="card-img-top fa" style="font-size: 4em">&#xf118;</span>
            <h4 class="card-title">Secondary Classes</h4>
            <h6 class="card-subtitle text-muted">Classes 6 to 8</h6>
            <p class="card-text"></p>
          </div>
          <div class="back card-block">
            <p>
              English
              <br> Hindi
              <br> Maths
              <br> Science
              <br> Social Science
              <br> Sanskrit
              <br>
              <br>
            </p>
            <a href="#" class="btn btn-outline-primary">Enroll Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 card-container">
        <div class="card card-flip">
          <div class="front card-block">
            <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
            <span class="card-img-top fa" style="font-size: 4em">&#xf118;</span>
            <h4 class="card-title">Senior Secondary Classes</h4>
            <h6 class="card-subtitle text-muted">Classes 9th and 10th</h6>
            <p class="card-text"></p>
          </div>
          <div class="back card-block">
            <p>
                English
                <br> Hindi / Sanskrit
                <br> Maths
                <br> Science
                <br> Social Science
                <br> 
                <br>
                <br>
            </p>
            <a href="#" class="btn btn-outline-primary">Enroll Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 card-container">
        <div class="card card-flip">
          <div class="front card-block">
            <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
            <span class="card-img-top fa" style="font-size: 4em">&#xf118;</span>
            <h4 class="card-title">Intermediate Classes</h4>
            <h6 class="card-subtitle text-muted">Classes 11th to 12th</h6>
            <p class="card-text">Maths</p>
          </div>
          <div class="back card-block">
            <p>
                English
                <br> Physics
                <br> Maths
                <br> Chemistry
                <br> Computer Science / Physical Education
                <br> 
                <br>
                <br>
            </p>
            <a href="#" class="btn btn-outline-primary">Enroll Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 card-container">
        <div class="card card-flip">
          <div class="front card-block">
            <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
            <span class="card-img-top fa" style="font-size: 4em">&#xf118;</span>
            <h4 class="card-title">Intermediate Classes</h4>
            <h6 class="card-subtitle text-muted">Classes 11th and 12th</h6>
            <p class="card-text">Biology</p>
          </div>
          <div class="back card-block">
            <p>
              English
              <br> Hindi / Informatics Practices
              <br> Physics
              <br> Biology
              <br> Chemistry
              <br> 
              <br>
              <br>
            </p>
            <a href="#" class="btn btn-outline-primary">Enroll Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 card-container">
        <div class="card card-flip">
          <div class="front card-block">
            <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
            <span class="card-img-top fa" style="font-size: 4em">&#xf118;</span>
            <h4 class="card-title">Intermediate Classes</h4>
            <h6 class="card-subtitle text-muted">Classes 11th and 12th</h6>
            <p class="card-text">Commerce</p>
          </div>
          <div class="back card-block">
            <p>
                English
                <br> Accountancy
                <br> Maths / Informatics Practices
                <br> Business Studies
                <br> Economics
                <br> 
                <br>
                <br>
            </p>
            <a href="#" class="btn btn-outline-primary">Enroll Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <style>
      .card-block .btn-outline-primary {
  width: 100%;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  bottom: 0;
  left: 0;
  position: absolute;
}

.card {
  margin: 20px 0;
}

/* Flip Cards CSS */
.card-container {
  perspective: 700px;
}
.card-flip {
  position: relative;
  width: 100%;
  transform-style: preserve-3d;
  height: auto;
  transition: all 0.5s ease-out;
  
  border: none;
}

.card-flip div {
  backface-visibility: hidden;
  transform-style: preserve-3d;
  height: 100%;
  width: 100%;
  border: none;
}

.card-flip .front {
  position: relative;
  z-index: 1;
}

.card-flip .back {
  position: relative;
  z-index: 0;
  transform: rotateY(-180deg);
}

.card-container:hover .card-flip {
  transform: rotateY(180deg);
}

  </style>
   

  <script>
      $(document).ready(function() {
  var front = document.getElementsByClassName("front");
  var back = document.getElementsByClassName("back");

  var highest = 0;
  var absoluteSide = "";

  for (var i = 0; i < front.length; i++) {
    if (front[i].offsetHeight > back[i].offsetHeight) {
      if (front[i].offsetHeight > highest) {
        highest = front[i].offsetHeight;
        absoluteSide = ".front";
      }
    } else if (back[i].offsetHeight > highest) {
      highest = back[i].offsetHeight;
      absoluteSide = ".back";
    }
  }
  $(".front").css("height", highest);
  $(".back").css("height", highest);
  $(absoluteSide).css("position", "absolute");
});
  </script>

<?php
include('footer.php');
?>
</body>
</html>