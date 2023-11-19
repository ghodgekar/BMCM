<?php 
$activePage = "phone_directory";
include 'header.php';
require_once "config/db.php";
$sql = "SELECT * FROM candidate_data WHERE is_active='1' and status ='3' ";
$result = mysqli_query($mysqli, $sql);
?>
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
    <!-- <div class="d-flex justify-content-end">
        <div class="input-group">
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" style="width: 250px;border: 2px solid #ed0500;margin: 2px" />
            </div>
            <button type="button" class="btn btn-primary" style="background-color: #ed0500; color: #fff;">
                <i class="fas fa-search">Search</i>
            </button>
        </div>
    </div>
    <hr> -->
    <table class="table" id="approveTbl">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Department</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
                <th scope="col">Location</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];
                $email = $row['email'];
                $mobile = $row['mobile_no'];
                $department = $row['department'];
                $address = $row['current_address'];
            ?>
                <tr class="text-center">
                    <th scope="row">
                        <?php echo $count; ?>
                    </th>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <?php echo $department; ?>
                    </td>
                    <td>
                        <?php echo $mobile; ?>
                    </td>
                    <td>
                        <?php echo $email; ?>
                    </td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                </tr>
                <?php $count++;
            } ?>
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

<script>
    $(document).ready(function () {
        $('#approveTbl').DataTable();
    });
</script>