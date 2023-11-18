<?php
include 'header.php';
require_once "../config/db.php";
$sql = "SELECT * FROM candidate_data WHERE is_active='1' and status ='1' ";
$result = mysqli_query($mysqli, $sql);
?>
<div class="container">
  <br>
  <table class="table" id="pendingTbl">
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
      while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];
        $email = $row['email'];
        $mobile = $row['mobile_no'];
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
            <?php echo $email; ?>
          </td>
          <td>
            <?php echo $mobile; ?>
          </td>
          <td>
            <?php echo $address; ?>
          </td>
          <td>
            <button type="button" class="btn btn-primary submitBtn viewBtn" data-id="<?php echo $row['id']; ?>"
              id="viewBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">view</button>
            <button type="button" class="btn btn-success submitBtn approveBtn" data-id="<?php echo $row['id']; ?>"
              data-status="2" id="approveBtn">Approve</button>
            <button type="button" class="btn btn-danger submitBtn rejectBtn" data-id="<?php echo $row['id']; ?>" id="rejectBtn">Rejected</button>
            <button type="button" class="btn btn-secondary documentBtn" id="documentBtn" data-bs-toggle="modal"
              data-bs-target="#exampleModal1" data-id="<?php echo $row['id']; ?>"> View Document </button>
          </td>
        </tr>
        <?php $count++;
      } ?>
    </tbody>
  </table>
  <br>
  <?php include 'view_popup.php'; ?>
  <?php include 'document_popup.php'; ?>
  <?php include 'footer.php'; ?>
  <script>
    $(document).ready(function () {
      $('#pendingTbl').DataTable();
    });
  </script>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down">
      <div class="modal-content" style="width: 500px;
    left: 25%;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reason</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <span class="msg"></span>
        <form id="rejectionform" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <input type="hidden" id="id" name="id">
              <input type="hidden" id="status" name="status" value="4">
              <input type="hidden" id="created_by"name="created_by" value="<?php echo $_SESSION['id']; ?>">
              <textarea class="form-control" id="exampleFormControlTextarea1" name="reason" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger submitRejectReason">Rejected</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
</body>

</html>