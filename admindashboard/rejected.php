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
        <th scope="col">Resone</th>
        <th scope="col">Admin Name</th>
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
         Reason
        </td>
        <td>
         Admin Name
        </td>
        <td>
          <button type="button" class="btn btn-primary submitBtn viewBtn"   data-bs-toggle="modal" data-bs-target="#exampleModal">view</button>
          <button type="button" class="btn btn-success submitBtn approveBtn" >Approve</button>
          <!-- <button type="button" class="btn btn-danger submitBtn rejectBtn"  data-bs-toggle="modal" data-bs-target="#exampleModal3">Rejected</button> -->
          <button type="button" class="btn btn-secondary documentBtn"  data-bs-toggle="modal" data-bs-target="#exampleModal1" > View Document </button>
        </td>
      </tr>
    
    </tbody>
  </table>
  <br>
 
</div>










</body>
</html>