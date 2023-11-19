<?php
include 'header.php';
require_once "../config/db.php";
$sql = "SELECT * FROM announcement WHERE is_active='1'";
$result = mysqli_query($mysqli, $sql);
?>

<div class="col-sm-12" style="padding:10px">
    <div class="container">
        <div class="text-right" style="text-align: end">
        <button type="button" class="btn btn-success announcementBtn" data-type="add" >Add Announcement</button>
        <br>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Place</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                $date = $row['date'];
                $time = $row['time'];
                $place = $row['place'];
                $subject = $row['subject'];
            ?>
                <tr class="text-center">
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $time; ?></td>
                    <td><?php echo $place; ?></td>
                    <td><?php echo $subject; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary editAnnouncement announcementBtn" data-type="edit" data-id="<?php echo $row['id']; ?>">Edit</button>
                        <button type="button" class="btn btn-danger">Delete </button>
                    </td>
                </tr>
            <?php 
                $count++;
                }
            ?>
            </tbody>
        </table>
    </div>
</div>



<!--add events---->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 70%;left: 12%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Events</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span class="msg"></span>
                <form id="announcementform" action="announcement_ajax.php" enctype="multipart/form-data" method="post">
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
                        <input type="text" id="place" name="place" class="form-control" />
                    </div>
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example3">Subject</label>
                        <textarea class="form-control" name="subject" id="subject" rows="4"></textarea>
                    </div>
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="posttype" id="posttype">
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 announcementBtnTxt"
                        style="width: 170px;color: #fff; background-color: #F44336; border-color: #F44336;">Add
                        Events</button>
                </form>

            </div>

        </div>
    </div>
</div>

<!-- end add events-->



<?php include 'footer.php'; ?>
</div>