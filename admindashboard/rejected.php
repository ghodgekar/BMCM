<?php
include 'header.php';?>
<div class="container">
  <br>
  <table class="table" >
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
      
      <tr class="text-center">
        <th scope="row">
          1
        </th>
        <td>
          pot
        </td>
        <td>
        abc@gamil.com
        </td>
        <td>
         123456789
        </td>
        <td>
         mumbai
        </td>
        <td>
          <button type="button" class="btn btn-primary submitBtn viewBtn"   data-bs-toggle="modal" data-bs-target="#exampleModal">view</button>
          <button type="button" class="btn btn-success submitBtn approveBtn" >Approve</button>
          <button type="button" class="btn btn-danger submitBtn rejectBtn"  data-bs-toggle="modal" data-bs-target="#exampleModal3">Rejected</button>
          <button type="button" class="btn btn-secondary documentBtn"  data-bs-toggle="modal" data-bs-target="#exampleModal1" > View Document </button>
        </td>
      </tr>
    
    </tbody>
  </table>
  <br>
 
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-fullscreen-sm-down">
    <div class="modal-content" style="width: 500px;
    left: 25%;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reason</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
  
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-danger">Rejected</button>
      </div>
    </div>
  </div>
</div>





</body>
</html>