<?php 
$activePage = "index"; 
include 'header.php'; 
require_once "config/db.php";
$sql = "SELECT * FROM announcement WHERE is_active='1' ";
$result = mysqli_query($mysqli, $sql);

?>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./image/BMC slider.gif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./image/BMC slider.gif" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container-fluid">
  <div class="row" style="padding-left:0px">
    <div class="col-md-12">
      <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
        <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center  py-2 text-white px-1 news"><span
            class="d-flex align-items-center">&nbsp;Events Updates</span></div>
          <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
            <?php 
              $count = 1;
              while ($row = mysqli_fetch_assoc($result)) { 
              $date = $row['date'];
              $time = $row['time'];
              $place = $row['place'];
              $subject = $row['subject'];  
            ?>
                <a href="#"><?php echo  $count; ?>. Intimation of meeting -Date <?php echo $date; ?></a> <span class="dot"></span><a href="#"> Time  <?php echo $time; ?></a><span class="dot"></span> 
                <a href="#">Location -  <?php echo $place; ?> </a> <span class="dot"></span>
                <a href="#" style="margin-right: 50px;">  Purpose - <?php echo $subject; ?>
                </a>
            <?php  $count++; } ?>
          </marquee>
      </div>
    </div>
  </div>
</div>




<div class="container">
  <p style="text-align:center;color:orange;padding:25px;font-size:22px;font-weight:500">
  इतिहास!! तू वळूनी पाहती पाठीमागे जरा, झुकवूनी मस्तक करशील त्यांना मानाचा मुजरा !! अश्या राजमाता माँसाहेब जिजाऊ, मराठा सम्राज्याचे संस्थापक छत्रपती शिवाजी महाराज अन धर्मवीर प्रतापशील छत्रपती संभाजी महाराज यांना मानाचा मुजरा!!
 </p>
</div>
<div class="container">
  <div class="row">

    <div class="col-sm-8">
      <p class="main" style="text-align: justify;">
      हजारो वर्षांच्या पारतांत्र्याच्या इतिहासाला पुसून टाकण्यासाठी, या गुलामगिरीच्या जोखडातून आपणा सर्वांची मुक्तता
करण्यासाठी, स्वराज्य मिळवण्याकरीता अठरा पगड जातीत विखुरलेल्या तत्कालीन समाजाला एकसंध करण्याचं काम छत्रपती शिवाजी
महाराजांनी केलं. केवळ स्वराज्य प्राप्त करून भागणार नाही तर त्यांचं रूपांतर सुराज्यात होणं गरजेचं आहे हे देखील छत्रपती शिवाजी
महाराजांच्या राज्यकारभाराने अधोरेखित केलं. या घटनेला देखील आज साडेतीनशे वर्षाहून अधिक काळ लोटलाय. दुदैवाने परिस्थितीत 
अपेक्षित सुधारणा होत नाहीत हे जाणवत असतानाच छत्रपती शिवाजी महाराज यांना जाणता राजाचे वंशज म्हणून आपण सारेच आज
त्यांना पुजतो. पण त्यांचा वारसा आपण तेवढ्याच समर्थपणे पुढे चालवतो का? भारतीय स्वातंत्र्याचा अमृत महोत्सव साजरा करत असताना
याच प्रश्नाने पछाडलेल्या बृहमुंबई महानगरपालिकेतील काही अधिकारी/ कर्मचारी यांनी पुढाकार घेऊन मराठा समाजाचा विकासाचा ध्यास
घेत एकत्र यायचं ठरवलं आणि मग त्यांनी आखलेल्या संकल्पनेला मूर्त रूप मिळालं ते आपल्या या मराठा मंडळ सामाजिक संस्थेच्या
रूपाने.

      </p>
    </div>
    <div class="col-sm-4">
      <img src="./image/Rajmudra.png" class="img-fluid" style="padding:20px" alt="...">
    </div>
  </div>
</div>


<div class="container" style="padding: 20px;">
  <div class="row">
    <img src="./image/foooter.jpg" class="img-fluid" alt="...">
  </div>
</div>
<div class="container" style="padding:25px;">
  <h2 style="text-align:center;color:#f44336"> Activites</h2>
</div>

<div class="container" style="padding:25px;">
  <div class="row row-cols-1  g-4">

    <div class="col-sm-3">
      <div class="card  text-center shadow-sm p-3 mb-5 bg-body rounded">
        <img src="./image/housing scheme.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Housing Schemes</h5>

        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card  text-center shadow-sm p-3 mb-5 bg-body rounded">
        <img src="./image/सांस्कृतिक.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Events & Seminars</h5>


        </div>
      </div>
    </div>


    <div class="col-sm-3">
      <div class="card  text-center shadow-sm p-3 mb-5 bg-body rounded">
        <img src="./image/exam & courses.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Exams & Courses</h5>


        </div>
      </div>
    </div>



    <div class="col-sm-3">
      <div class="card  text-center shadow-sm p-3 mb-5 bg-body rounded">
        <img src="./image/job conselling.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Job Conselling</h5>


        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card  text-center shadow-sm p-3 mb-5 bg-body rounded">
        <img src="./image/youth empowerment.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Youth Empowerment</h5>


        </div>
      </div>
    </div>


    <div class="col-sm-3">
      <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
        <img src="./image/women empowerment.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Women Empowerment</h5>


        </div>
      </div>
    </div>




    <div class="col-sm-3">
      <div class="card  text-center shadow-sm p-3 mb-5 bg-body rounded">
        <img src="./image/job conselling.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Other Activites</h5>


        </div>
      </div>
    </div>
  </div>
</div>
</div>


<?php include 'footer.php'; ?>



</body>

</html>