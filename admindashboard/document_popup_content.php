<?php
require_once "../config/db.php";
$id = $_POST['id'];
$sql = "SELECT * FROM candidate_data WHERE is_active='1' and id =$id ";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$reg_no = $row['reg_no'];
?>
<style>
.downloadBtn{
  position: absolute;
  bottom: 0;
} 
</style>
<main class="main">
  <div class="container">
    <div class="card">
      <div class="card-image">
        <a href="../uploads/<?php echo $reg_no; ?>/0_<?php echo $reg_no; ?>.jpg" data-fancybox="gallery" data-caption="Profile Photo">
          <img src="../uploads/<?php echo $reg_no; ?>/0_<?php echo $reg_no; ?>.jpg" alt="Image Gallery">
        </a>
        <br>
        <a href="../uploads/<?php echo $reg_no; ?>/0_<?php echo $reg_no; ?>.jpg" download><button class="btn btn-danger downloadBtn">Download</button></a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="../uploads/<?php echo $reg_no; ?>/1_<?php echo $reg_no; ?>.jpg" data-fancybox="gallery" data-caption="बृहन्मुंबई महानगरपालिकेचे ओळखपत्र">
          <img src="../uploads/<?php echo $reg_no; ?>/1_<?php echo $reg_no; ?>.jpg" alt="Image Gallery">
        </a>
        <br>
        <a href="../uploads/<?php echo $reg_no; ?>/1_<?php echo $reg_no; ?>.jpg" download><button class="btn btn-danger downloadBtn">Download</button></a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="../uploads/<?php echo $reg_no; ?>/2_<?php echo $reg_no; ?>.jpg" data-fancybox="gallery" data-caption="मराठा/कुणबी/कुणबी मराठा असल्याचे कागदपत्र">
          <img src="../uploads/<?php echo $reg_no; ?>/2_<?php echo $reg_no; ?>.jpg" alt="Image Gallery">
        </a>
        <br>
        <a href="../uploads/<?php echo $reg_no; ?>/2_<?php echo $reg_no; ?>.jpg" download><button class="btn btn-danger downloadBtn">Download</button></a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="../uploads/<?php echo $reg_no; ?>/3_<?php echo $reg_no; ?>.jpg" data-fancybox="gallery" data-caption="Payment Receipt">
          <img src="../uploads/<?php echo $reg_no; ?>/3_<?php echo $reg_no; ?>.jpg" alt="Image Gallery">
        </a>
        <br>
        <a href="../uploads/<?php echo $reg_no; ?>/3_<?php echo $reg_no; ?>.jpg" download><button class="btn btn-danger downloadBtn">Download</button></a>
      </div>
    </div>
  </div>
</main>
