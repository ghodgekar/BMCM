<?php $activePage = "contact";include 'header.php'; ?>

<div class="hero-image">
    <div class="hero-text">
        <h1>Contact Us</h1>

    </div>
</div>




<div class="container" style="padding-top: 25px;">
    <div class="row gy-5">
        <div class="col-sm-4">
            <div class="p-3 ">
                <div class="text-center">
                    <img src="./image/location.png" class="img-fluid" alt="...">
                </div>
                <p style=text-align:center;padding:3px;>तळमजला, एफ, सिताराम बिल्डिंग, अण्णासाहेब दौंडकर मार्ग, क्रॉफर्ड
                    मार्केट,
                    फोर्ट, मुंबई - ४०० ००१</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="p-3  ">
                <div class="text-center">
                    <img src="./image/email.png" class="img-fluid" alt="...">
                </div>
                <p style=text-align:center;padding:3px;>admin@marathamandal.com</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="p-3">
                <div class="text-center">
                    <img src="./image/contact.png" class="img-fluid" alt="...">
                </div>
                <p style=text-align:center;padding:3px;>9833615551</p>
            </div>
        </div>

    </div>
</div>
<div class="container shadow-lg p-3 mb-5 bg-body rounded">
    <div class=" row">
        <div class="col-sm-6" style="padding:15px">
        <p class="msg"></p>
            <form id="contact_form2" method="post" action="contact_ajax.php" role="form">
                <div class="mb-3">
                    <label for="exampleInputEmail12" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail12" name="name"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail13" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail13" name="email"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail14" class="form-label">Contact No</label>
                    <input type="number" class="form-control" id="exampleInputEmail14" name="mobile">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Describe your Requirements </label>
                    <textarea name="msg" cols="2" rows="4" class="form-control" id="exampleInputPassword1"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary" style=" width: 190px; padding: 15px;background-color:red">Submit</button>
            </form>
        </div>
        <div class="col-sm-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.68088722125!2d72.82396807500076!3d18.945513956056335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce1f7369f877%3A0x3d2c9594e3c82f1b!2sSitaram%20Building!5e0!3m2!1sen!2sin!4v1699347226888!5m2!1sen!2sin"
                width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
</div>






<?php include 'footer.php'; ?>