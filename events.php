<?php $activePage = "events"; include 'header.php'; ?>
<div class="hero-image" style="background-image:url(./image/about.jpg)
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">
  <div class="hero-text">
    <h1 style="color:red">About Us</h1>
    <!-- <p>And I'm a Photographer</p>
          <button>Hire me</button> -->
  </div>
</div>

<div class="container">
  <br>
  <?php
    if (isset($_SESSION['member_username'])) {
  ?>
    <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/events.jpeg" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/events1.jpeg" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/events1.jpeg" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/team image 1.jpg" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/team image 2.jpg" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/team image 3.jpg" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/team image 3.jpg" class="img-fluid" alt="..."></div>
      </div>
    </div>
  <?php
  } else {
  ?>
    <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/blur.jpg" width="100%" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/blur.jpg" width="100%" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/blur.jpg" width="100%" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/blur.jpg" width="100%" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/blur.jpg" width="100%" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/blur.jpg" width="100%" class="img-fluid" alt="..."></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><img src="./image/blur.jpg" width="100%" class="img-fluid" alt="..."></div>
      </div>
    </div>
  <?php
   }
  ?>
  <br>
</div>




<?php include 'footer.php'; ?>