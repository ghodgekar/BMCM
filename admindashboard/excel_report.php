<table border="1">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Reg No</th>
            <th scope="col">Full Name</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Email id</th>
            <th scope="col">Mobile No</th>
            <th scope="col">Current Address</th>
            <th scope="col">Permanent Address</th>
            <th scope="col">Position</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Division</th>
            <th scope="col">Department</th>
            <th scope="col">Emp Id</th>
            <th scope="col">Recommender Name</th>
            <th scope="col">Recommender Mobile No</th>
            <th scope="col">Recommender Member No</th>
            <th scope="col">Fees Type</th>
            <th scope="col">Fees Transaction Id</th>
            <th scope="col">Fees Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once "../config/db.php";
            $sql = "SELECT * FROM candidate_data WHERE is_active='1' and status =$_GET[s] ";
            $result = mysqli_query($mysqli, $sql);
            $count = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];
                $date_of_birth = $row['date_of_birth'];
                $reg_no = $row['reg_no'];
                $position = $row['position'];
                $blood_grup = $row['blood_grup'];
                $division = $row['division'];
                $department = $row['department'];
                $emp_id = $row['emp_id'];
                $mobile_no = $row['mobile_no'];
                $email = $row['email'];
                $permanent_address = $row['permanent_address'];
                $current_address = $row['current_address'];
                $recommender_name = $row['recommender_name'];
                $recommender_mobile_no = $row['recommender_mobile_no'];
                $recommender_member_no = $row['recommender_member_no'];
                $fees_type = $row['fees_type'];
                $fees_transaction_id = $row['fees_transaction_id'];
                $fees_date = $row['fees_date'];
        ?>
        <tr class="text-center">
            <th scope="row"><?php echo $count; ?></th>
            <td><?php echo $reg_no; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $date_of_birth; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $mobile_no; ?></td>
            <td><?php echo $current_address; ?></td>
            <td><?php echo $permanent_address; ?></td>
            <td><?php echo $position; ?></td>
            <td><?php echo $blood_grup; ?></td>
            <td><?php echo $division; ?></td>
            <td><?php echo $department; ?></td>
            <td><?php echo $emp_id; ?></td>
            <td><?php echo $recommender_name; ?></td>
            <td><?php echo $recommender_mobile_no; ?></td>
            <td><?php echo $recommender_member_no; ?></td>
            <td><?php echo $fees_type; ?></td>
            <td><?php echo $fees_transaction_id; ?></td>
            <td><?php echo $fees_date; ?></td>
        </tr>
        <?php 
            $count++;
            }
            if($_GET['s'] == '1'){$filename = 'pending'; }
            if($_GET['s'] == '2'){$filename = 'payment'; }
            if($_GET['s'] == '3'){$filename = 'approve'; }
            if($_GET['s'] == '4'){$filename = 'reject'; }
            // Genrating Execel  filess
            header("Content-type: application/octet-stream");
            header("Content-Disposition: attachment; filename=" . $filename . "-Report.xls");
            header("Pragma: no-cache");
            header("Expires: 0");
        ?>
    </tbody>
</table>