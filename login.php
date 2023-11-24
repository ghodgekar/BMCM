<?php 
  include 'header.php';
  if(isset($_SESSION['member_username'])){
    header('Location: index.php');
  }
?>
  
  <section class=>
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100" style="padding:px;">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="image/log in.jpg"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-5 mb-5">
          <p class="msg" style="text-align:center;font-size:18px;color:#ed0500;;font-weight:600">Log in with your email and password</p>
          <form id="loginform" action="login_ajax.php" enctype="multipart/form-data" method="post">
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control form-control-lg" name="email" placeholder="Enter a valid email address" />
            </div>
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg" name="password"placeholder="Enter password" />
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <!-- <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div> -->
              <a href="#!" class="text-body">Forgot password?</a>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg submitBtn" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Not yet a member <a href="register.php"class="link-danger">Signup Now</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php';?>
</body>
</html>