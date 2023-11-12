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
        <button type="button" class="btn btn-primary submitBtn" data-id="<?php echo $row['id']; ?>" id="viewBtn"  data-bs-toggle="modal" data-bs-target="#exampleModal">view</button>
        <button type="button" class="btn btn-success submitBtn" data-id="<?php echo $row['id']; ?>" data-status="2" id="approveBtn">Approve</button>
        <button type="button" class="btn btn-danger submitBtn" data-id="<?php echo $row['id']; ?>" id="rejectBtn">Rejected</button>
      </td>
    </tr>
    <?php $count ++; } ?>
  </tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width:800px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="table-responsive" style="width:700px">
      <table class="table table-bordered table-hover">
        <thead>
         
        </thead>
        <tbody>
          <tr>
            
            <th scope="row">id</th>
            <td colspan="3"> </td>
       
          </tr>

          <tr>
          <th scope="row">Full Name</th>
          <td colspan="1">abc xyz pqr</td>
          <th scope="row">Blood Group</th >
          <td>B+</td>
          </tr>
                
          <tr>
            <th scope="row">Mobile No</th>
             <td>123456789</td>
             <th scope="row">Email-Id</th >
             <td>abc@gmail.com</td>
          </tr>
          <th scope="row">Address</th>
          <td colspan="3"></td>
          </tr>

          <tr>
            <th scope="row">Current Address</th>
            <td colspan="3"></td>
          </tr>
          <tr>
            <th scope="row">Position 
             </th>
             <td>fghbjhbj</td>
             <th scope="row">Division</th >
             <td>gghvhbhbh</td>
</tr>      
          
          <tr>
            <th scope="row">Department</th>
             <td>fghbjhbj</td>
             <th scope="row">Employee ID</th >
             <td>gghvhbhbh</td>
          </tr>

          <tr>  
          <th scope="row">Name of Recommender</th>
          <td >sdfghjkkkjjjjjjjjjjjjjjjjjjjsdvfhgdhgdfjgbdfjgfdjk</td>
          <th scope="row">Recommender mobile no</th>
          <td></td>
          </tr>
         
          <tr>
            <th scope="row"> Member No</th>
             <td>fghbjhbj</td>
             <th scope="row">recommendation_date</th >
             <td>gghvhbhbh</td>
          </tr>    
        </tbody>
      </table>
    </div>
      </div>
     
    </div>
  </div>
</div>














<?php include 'footer.php'; ?>
</div>

  </body>
</html>