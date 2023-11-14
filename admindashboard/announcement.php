<?php include 'header.php'?>

<div class="container">
<div class="row">
<div class="col-sm-6" style="padding:10px">
<form>
  <!-- Name input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example1">Date</label>
    <input type="Date" id="form4Example1" class="form-control" />
    
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example2">Time</label>
    <input type="text" id="form4Example2" class="form-control" />
    
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example3">Place</label>
  <input type="text" id="form4Example2" class="form-control" />
   
  </div>
  <!-- Message input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example3">Subject</label>
    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
   
</div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" style="    width: 170px;
    color: #fff;
    background-color: #F44336;
    border-color: #F44336;">Add Events</button>
</form>
</div>
<div class="col-sm-6" style="padding:10px">
<img src="./image/event announcement.jpg" class="img-fluid" alt="...">
</div>

</div>
</div>
<?php include 'footer.php'; ?>