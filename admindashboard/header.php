<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: index.php');
}

require_once "../config/db.php";
$approveCountresult = mysqli_query($mysqli, "SELECT count(id) FROM candidate_data WHERE is_active='1' and status='3'");
$approveCountrow = mysqli_fetch_array($approveCountresult);
$approveCount = $approveCountrow[0];

$pendingresult = mysqli_query($mysqli, "SELECT count(id) FROM candidate_data WHERE is_active='1' and status='1'");
$pendingrow = mysqli_fetch_array($pendingresult);
$pendingCount = $pendingrow[0];

$paymentCountresult = mysqli_query($mysqli, "SELECT count(id) FROM candidate_data WHERE is_active='1' and status='2'");
$paymentCountrow = mysqli_fetch_array($paymentCountresult);
$paymentCount = $paymentCountrow[0];

$rejectCountresult = mysqli_query($mysqli, "SELECT count(id) FROM candidate_data WHERE is_active='1' and status='4'");
$rejectCountrow = mysqli_fetch_array($rejectCountresult);
$rejectCount = $rejectCountrow[0];

$donationresult = mysqli_query($mysqli, "SELECT count(id) FROM donation_data");
$donationrow = mysqli_fetch_array($donationresult);
$donationCount = $donationrow[0];


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
  <link href="assets/css/style.css" rel="stylesheet">
  <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
  <title>Maratha Mandal</title>
  <link rel="icon" type="image/x-icon" href="/image/fevicon icon.png">
</head>

<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <div class="container-fluid shadow-lg p-3 mb-5 bg-body rounded" style="background-color:rgb(230, 226, 221);padding:25px">
    <div class="container " style="background-color:rgb(226, 226, 226);padding:25px;">
      <div class="d-flex justify-content-between">
        <div class="p-2 bd-highlight"><span><b>Admin Name : </b><?php echo $_SESSION['name']; ?></span><br>
          <span><b>Admin Email :</b> <?php echo $_SESSION['username']; ?></span>
        </div>
        <div class="p-2 bd-highlight" style="color: red; font-size: 21px;"><a href="logout.php" class="btn btn-danger">Log Out</a></div>
      </div>
    </div>

    <div class="container">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid" style="height: 158px;border-bottom: #0d6efd 2px solid;">
        <a class="navbar-brand" href="#"><img src="./image/logo.jpg"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto" style="padding-top: 25px;">
            <a class="nav-link shadow-lg p-3 mb-5 bg-body rounded" href="pending.php" style="margin-left: 24px;
            height: 100px;
            padding-top: 25px;
            border-bottom: 5px rgb(253, 203, 2) solid;
            color:rgb(253, 203, 2);
            width: 212px;">Pending <br> <?php echo $pendingCount; ?></a>
            <a class="nav-link shadow-lg p-3 mb-5 bg-body rounded" href="payment.php" style="margin-left: 24px;
            height: 100px;
            padding-top: 25px;
            border-bottom: 5px orange solid;
            color:orange;
            width: 212px; ">Payment <br> <?php echo $paymentCount; ?></a>
            <a class="nav-link active shadow-lg p-3 mb-5 bg-body rounded" aria-current="page" href="approve.php" style="margin-left: 24px;
            height: 100px;
            padding-top: 25px;
            border-bottom: 5px green solid;
            color: green;
            width: 212px;">Approved <br> <?php echo $approveCount; ?></a>
            <a class="nav-link active shadow-lg p-3 mb-5 bg-body rounded" aria-current="page" href="rejected.php" style="margin-left: 24px;
            height: 100px;
            padding-top: 25px;
            border-bottom: 5px red solid;
            color: red;
            width: 212px;">Rejected <br> <?php echo $rejectCount; ?></a>
            <a class="nav-link active shadow-lg p-3 mb-5 bg-body rounded" aria-current="page" href="donation_view.php" style="margin-left: 24px;
            height: 100px;
            padding-top: 25px;
            border-bottom: 5px blue solid;
            color: blue;
            width: 212px;">Donation <br> <?php echo $donationCount; ?></a>

            <a class="nav-link active " aria-current="page" href="announcement.php" style="margin-left:5px;
            height: 100px;
            padding-top:10px;
           "><img src="./image/announcement icon.png" class="img-fluid" alt="..."></a>
          </div>
        </div>
      </div>
    </nav>
</div>
