<?php $activePage = "phone_directory";include 'header.php';?>
<style>
.table_blur tbody td {
  color: transparent;
  text-shadow: 0 0 7px #a09f9d;
}
</style>
<div class="hero-image" style="background-image:url(./image/about.jpg)
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">
    <div class="hero-text">
        <h1 style="color:red">Phone Directory</h1>
        <!-- <p>And I'm a Photographer</p>
          <button>Hire me</button> -->
    </div>
</div>

<div class="container" style="padding-top:25px">
<br>
  <?php
    if (isset($_SESSION['member_username'])) {
  ?>
    <div class="d-flex justify-content-end">
        <div class="input-group">
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" style="width: 250px;border: 2px solid #ed0500;margin: 2px" />
                <!-- <label class="form-label" for="form1">Search</label> -->
            </div>
            <button type="button" class="btn btn-primary" style="background-color: #ed0500; color: #fff;">
                <i class="fas fa-search">Search</i>
            </button>
        </div>
    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Department</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
                <th scope="col">Location</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
        </tbody>
    </table>
  <?php
  } else {
  ?>
    <table class="table table_blur">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Department</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
                <th scope="col">Location</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
            <tr>

                <td>1</td>
                <td>abc</td>
                <td>md</td>
                <td>123456789</td>
                <td>abc@gmail.com</td>
                <td>mumbai
                <td>
            </tr>
        </tbody>
    </table>
  <?php
   }
  ?>
  <br>

</div>


<?php include 'footer.php';?>