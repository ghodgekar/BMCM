<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
require_once "../config/db.php";
$sql = "SELECT * FROM candidate_data WHERE is_active='1' and status ='3' ";
$result = mysqli_query($mysqli, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    <title>Maratha Mandal</title>
    <link rel="icon" type="image/x-icon" href="/image/fevicon icon.png">
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <div class="container-fluid shadow-lg p-3 mb-5 bg-body rounded"
        style="background-color:rgb(230, 226, 221);padding:25px">
        <div class="container " style="background-color:rgb(226, 226, 226);padding:25px;">
            <div class="d-flex justify-content-between">
                <div class="p-2 bd-highlight"><span><b>Admin Name : </b><?php echo $_SESSION['name']; ?></span><br>
                    <span><b>Admin Email :</b> <?php echo $_SESSION['username']; ?></span>
                </div>
                <div class="p-2 bd-highlight" style="color: green; font-size: 21px;"><a href="bulkMsg.php"
                        class="btn btn-primary">Send Bulk MSG</a></div>
                <div class="p-2 bd-highlight" style="color: red; font-size: 21px;"><a href="logout.php"
                        class="btn btn-danger">Log Out</a></div>
                <div class="p-2 bd-highlight" style="color: green; font-size: 21px;"><a href="pending.php"
                        class="btn btn-secondary">Back</a></div>
            </div>
        </div>
        <br>
        <div class="container">
            <form id="loginform" action="bulkMsgEditor.php" enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="col-sm-9">
                        <textarea name="msg" id="msgContent" class="form-control" cols="36" rows="3" placeholder="Enter Message Here"></textarea>
                        <span style="color: red" id="errorMsg"></span>
                    </div>
                    <div class="col-sm-3" style="text-align: right;"><br>
                    <button class="btn btn-primary" id="emailContent" type="button">Send Email</button>
                    <button class="btn btn-danger" id="smsContent" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Send SMS</button>
                    </div>
                </div><br>
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th>
                                <button type="button" id="selectAll" class="btn btn-primary"><span class="sub"></span>
                                    Select</button>
                            </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];
                            $email = $row['email'];
                            $mobile = $row['mobile_no'];
                            $address = $row['current_address'];
                        ?>
                        <tr style="text-align: center;">
                            <td><input type="checkbox" name="isCheck[]" class="single_select"
                                    data-email="<?php echo $email; ?>" data-name="<?php echo $name; ?>" /></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $mobile; ?></td>
                            <td><?php echo $address; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    
    
    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 70%;left: 12%;">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Add New Events</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span class="msg"></span>
                <form id="announcementform"  enctype="multipart/form-data" method="post">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example1">Date</label>
                        <input type="Date" id="date" name="date" class="form-control" />
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example2">Time</label>
                        <input type="text" id="time" name="time" class="form-control" />
                    </div>
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example3">Place</label>
                        <input type="text" id="place" name="place" class="form-control" maxlength="30" />
                    </div>
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example3">Subject</label>
                        <textarea class="form-control" name="subject" id="subject" rows="4" maxlength="30"></textarea>
                    </div>
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="posttype" id="posttype">
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 announcementBtnTxt"
                        style="width: 170px;color: #fff; background-color: #F44336; border-color: #F44336;">Send Msg</button>
                </form>

            </div>

        </div>
    </div>
</div>
    <?php include 'view_popup.php';?>
    <?php include 'document_popup.php';?>
    <?php include 'footer.php';?>
    <script>
    $(document).ready(function() {
        $('body').on('click', '#selectAll', function() {
            if ($(this).hasClass('allChecked')) {
                $('input[type="checkbox"]', '#example').prop('checked', false);
            } else {
                $('input[type="checkbox"]', '#example').prop('checked', true);
            }
            $(this).toggleClass('allChecked');
        });
        $('#emailContent').click(function() {
            $(this).attr('disabled', 'disabled');
            var id = $(this).attr("id");
            var email_data = [];
            $('.single_select').each(function() {
                if ($(this).prop("checked") == true) {
                    email_data.push({
                        email: $(this).data("email"),
                        name: $(this).data('name')
                    });
                }
            });
            var msg = $('#msgContent').val();
            if(email_data.length > 0 && msg != ''){
                $.ajax({
                    url: "bulkMsgEditor.php",
                    method: "POST",
                    data: {
                        email_data: email_data,
                        content: msg
                    },
                    beforeSend: function() {
                        $('#' + id).html('Sending...');
                        $('#' + id).addClass('btn-danger');
                    },
                    success: function(data) {
                        $('#errorMsg').text('');
                        if (data = 'ok') {
                            $('#' + id).text('Success');
                            $('#' + id).removeClass('btn-danger');
                            $('#' + id).removeClass('btn-info');
                            $('#' + id).addClass('btn-success');
                        } else {
                            $('#' + id).text(data);
                        }
                        $('#' + id).attr('disabled', false);
                    }
                });
            }else{
                $('#' + id).attr('disabled', false);
                $('#errorMsg').text('Please Enter Message Content and select Email id to send');
            }
        });
    });
    </script>
</body>

</html>