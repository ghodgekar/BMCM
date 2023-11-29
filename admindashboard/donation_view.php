<?php
include 'header.php';
require_once "../config/db.php";
$donationresult = mysqli_query($mysqli, "SELECT * FROM donation_data");
?>


<div class="container">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Full Name</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Donation Amount</th>
                <th scope="col">Donation Receipts</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $count = 1;
            while($row = mysqli_fetch_assoc($donationresult)){
              $id = $row['id'];
              $donar_name = $row['donar_name'];
              $donar_mobile = $row['donar_mobile'] ;
              $donar_amt = $row['donar_amt'] ;
            ?>
            <tr class="text-center">
                <th scope="row"><?php echo $count; ?></th>
                <td><?php echo $donar_name; ?></td>
                <td><?php echo $donar_mobile; ?></td>
                <td><?php echo $donar_amt; ?></td>
                <td><a class="btn btn-secondary" href="../uploads/donation/D_<?php echo $id;?>.jpg" download="download">Download Receipts</a></td>
            </tr>
            <?php $count ++; } ?>
        </tbody>
    </table>
    <?php include 'footer.php'; ?>
</div>