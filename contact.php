


<?php include 'header.php'; ?>

      <div class="hero-image">
        <div class="hero-text">
          <h1>Contact Us</h1>
          <!-- <p>And I'm a Photographer</p>
          <button>Hire me</button> -->
        </div>
      </div>

      <div class="container">
        <div class="row">
            <h4 style="text-align:center;padding:25px">For any enquiries about our services and availability, kindly  contact us at:</h4>
            <div class="col-sm-8" style="padding:15px" >
    
            <form id="contact_form2" method="post" action="contact.php" role="form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                        
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" >Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contact No</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number">
                       
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Describe your Requirements </label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="message">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="
                    width: 190px;
                    padding: 15px;">Submit</button>
                  </form>
    
    
    
    
    
    
    
            </div>
            <div class="col-sm-4">
                <h2 class="text-center"style="padding-top: 32px;
                font-size: 25px;
                 color: #000;"> Location</h2>
                <p class="text-center" style="color:#ff9c00;font-size: 18px;">तळमजला, एफ, सिताराम बिल्डिंग, अण्णासाहेब दौंडकर मार्ग, क्रॉफर्ड मार्केट, फोर्ट, मुंबई - ४०० ००१</p>
                <hr style="color:#ff9c00;">
                <h2 class="text-center"style="font-size:25px;color:#000;">Contact Me</h2>
          <p class="text-center"style="color: #fff;font-size: 18px;"> <b>Email : </b>info@oasishospitality.in <br>
            <b>Call : </b>+91123456789 </p>
              <hr style="color:#ff9c00;">
                
              <h2 class="text-center"style="font-size:25px;color:#000;">Stay Connected</h2>
              <p style="text-align: center;
              padding: 8px;"> 
             <a href="#"><i class="fa fa-facebook-f"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              
            
                  
            
            
                
    
    
    
    
            </div>
        </div>
    </div>



    <script type="text/javascript">
       $(document).ready(function() {
           $("#contact_form3").on('submit', function(event) {
               event.preventDefault(); 
               var formData = $(this).serialize();
               $.ajax({
                   type: 'POST',
                   url: 'enquiry-mail.php',
                   data: formData,
                   success: function(response) { 
                        alert("Mail Sent");
                        console.log(response); 
                        $('#contact_form2')[0].reset();
                   },
                   error: function(xhr, status, error){
                       console.log(error); 
                   }
               });
           });
       });
      </script>
<script>


    
    <?php include 'footer.php'; ?>