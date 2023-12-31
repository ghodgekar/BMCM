<?php
include 'header.php';
require_once "../config/db.php";
$sql = "SELECT * FROM candidate_data WHERE is_active='1' and status ='3' ";
$result = mysqli_query($mysqli, $sql);
?>

<div class="container">
    <div class="text-right" style="text-align: right;">
      <a href='excel_report.php?s=3' class="btn btn-success" target='_blank'>Open Excel</a>
    </div>
    <br>
    <table class="table" id="approveTbl">
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
</div>
<script>
    $(document).ready(function () {
        $('#approveTbl').DataTable();
    });
</script>
</body>

</html>