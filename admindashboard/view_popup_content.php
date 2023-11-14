<?php 
    require_once "../config/db.php";
    $id=$_POST['id']; 
    $sql = "SELECT * FROM candidate_data WHERE is_active='1' and id =$id ";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_assoc($result);
    $reg_no = $row['reg_no'];
    $name = $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];
    $blood_grup = $row['blood_grup'];
    $position = $row['position'];
    $division = $row['division'];
    $department = $row['department'];
    $emp_id = $row['emp_id'];
    $mobile_no = $row['mobile_no'];
    $email = $row['email'];
    $address = $row['current_address'];
    $permanent_address = $row['permanent_address'];
    $recommender_name = $row['recommender_name'];
    $recommender_mobile_no = $row['recommender_mobile_no'];
    $recommender_member_no = $row['recommender_member_no'];
    $fees_type = $row['fees_type'];
    $fees_transaction_id = $row['fees_transaction_id'];
    $fees_date = $row['fees_date'];
?>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
        </thead>
        <tbody>
        <tr>
            <th scope="row">id</th>
            <td colspan="3"><?php echo $reg_no; ?> </td>
        </tr>
        <tr>
            <th scope="row">Full Name</th>
            <td colspan="1"><?php echo $name; ?></td>
            <th scope="row">Blood Group</th>
            <td><?php echo $blood_grup; ?></td>
        </tr>
        <tr>
            <th scope="row">Mobile No</th>
            <td><?php echo $mobile_no; ?></td>
            <th scope="row">Email-Id</th>
            <td><?php echo $email; ?></td>
        </tr>
        <th scope="row">Address</th>
        <td colspan="3"><?php echo $permanent_address; ?></td>
        </tr>
        <tr>
            <th scope="row">Current Address</th>
            <td colspan="3"><?php echo $address; ?></td>
        </tr>
        <tr>
            <th scope="row">Position</th>
            <td><?php echo $position; ?></td>
            <th scope="row">Division</th>
            <td><?php echo $division; ?></td>
        </tr>
        <tr>
            <th scope="row">Department</th>
            <td><?php echo $department; ?></td>
            <th scope="row">Employee ID</th>
            <td><?php echo $emp_id; ?></td>
        </tr>
        <tr>
            <th scope="row">Name of Recommender</th>
            <td><?php echo $recommender_name; ?></td>
            <th scope="row">Recommender mobile no</th>
            <td><?php echo $recommender_mobile_no; ?></td>
        </tr>
        <tr>
            <th scope="row"> Member No</th>
            <td><?php echo $recommender_member_no; ?></td>
        </tr>
        <tr>
            <th scope="row">Gpay/phonepe/netbanking/paytm</th>
            <td colspan="3"><?php echo $fees_type; ?></td>
        </tr>
        <tr>
            <th scope="row">Transaction Id</th>
            <td><?php echo $fees_transaction_id; ?></td>
            <th scope="row">Transaction Date</th>
            <td><?php echo $fees_date; ?></td>
        </tr>
        </tbody>
    </table>
</div>