<?php 
include 'header.php';
require_once "../config/db.php"; 
$sql = "SELECT * FROM candidate_data WHERE is_active='1' and status ='1' ";
$result = mysqli_query($mysqli, $sql);
?>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email id</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Address</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $count = 1;
    while($row = mysqli_fetch_assoc($result)){
      $name = $row['f_name'] . " ". $row['m_name'] . " ". $row['l_name'];
      $email = $row['email'] ;
      $mobile = $row['mobile_no'] ;
      $address = $row['current_address'] ;
    ?>
    <tr class="text-center">
      <th scope="row"><?php echo $count; ?></th>
      <td><?php echo $name; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $mobile; ?></td>
      <td><?php echo $address; ?></td>
      <td>
        <button type="button" class="btn btn-primary submitBtn" data-id="<?php echo $row['id']; ?>" id="viewBtn">view</button>
        <button type="button" class="btn btn-success submitBtn" data-id="<?php echo $row['id']; ?>" data-status="2" id="approveBtn">Approve</button>
        <button type="button" class="btn btn-danger submitBtn" data-id="<?php echo $row['id']; ?>" id="rejectBtn">Rejected</button>
      </td>
    </tr>
    <?php $count ++; } ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
</div>

  </body>
</html>