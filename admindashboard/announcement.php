<?php include 'header.php'?>

<!-- <div class="container">
    <div class="row">
        <div class="col-sm-6" style="padding:10px">
            <p class="msg mb-4"></p>
            <form id="announcementform" action="announcement_ajax.php" enctype="multipart/form-data" method="post">
                
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example1">Date</label>
                    <input type="Date" id="form4Example1" name="date" class="form-control" />
                </div>
                
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example2">Time</label>
                    <input type="text" id="form4Example2" name="time" class="form-control" />
                </div>
               
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Place</label>
                    <input type="text" id="form4Example5" name="place" class="form-control" />
                </div>
               
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Subject</label>
                    <textarea class="form-control" name="subject" id="form4Example3" rows="4"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 170px;color: #fff; background-color: #F44336; border-color: #F44336;">Add Events</button>
            </form>
        </div>
        <div class="col-sm-6" style="padding:10px">
            <img src="./image/event announcement.jpg" class="img-fluid" alt="...">
        </div>
    </div>
</div> -->



<div class="col-sm-12" style="padding:10px">
        <div class="container">
    <br>
    <table class="table" >
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
           
            <tr class="text-center">
                <th scope="row">1</th>
                <td>11/12/2023</td>
                <td>12pm</td>
                <td>Mumbai</td>
                <td>hfggghvgfdhgdhgdhgdhgdhgdh   gfygeuyfgeurfy  hgyfgeyfg</td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Edit</button>
                    <button type="button" class="btn btn-danger">Delete </button>
                </td>
            </tr>
           
        </tbody>
    </table>
        </div>
    </div>



<!--add events---->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"style="width: 70%;left: 12%;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Events</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
            <form id="announcementform" action="announcement_ajax.php" enctype="multipart/form-data" method="post">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example1">Date</label>
                    <input type="Date" id="form4Example1" name="date" class="form-control" />
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example2">Time</label>
                    <input type="text" id="form4Example2" name="time" class="form-control" />
                </div>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Place</label>
                    <input type="text" id="form4Example5" name="place" class="form-control" />
                </div>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Subject</label>
                    <textarea class="form-control" name="subject" id="form4Example3" rows="4"></textarea>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 170px;color: #fff; background-color: #F44336; border-color: #F44336;">Add Events</button>
            </form>
       
      </div>
      
    </div>
  </div>
</div>

<!-- end add events-->

<!--edit events--->

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 70%;left: 12%;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Events</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
            <form id="announcementform" action="announcement_ajax.php" enctype="multipart/form-data" method="post">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example1">Date</label>
                    <input type="Date" id="form4Example1" name="date" class="form-control" />
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example2">Time</label>
                    <input type="text" id="form4Example2" name="time" class="form-control" />
                </div>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Place</label>
                    <input type="text" id="form4Example5" name="place" class="form-control" />
                </div>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Subject</label>
                    <textarea class="form-control" name="subject" id="form4Example3" rows="4"></textarea>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 170px;color: #fff; background-color: #F44336; border-color: #F44336;">Edit Events</button>
            </form>
       
      </div>
      
    </div>
  </div>
</div>










    <?php include 'footer.php';?>
</div>

