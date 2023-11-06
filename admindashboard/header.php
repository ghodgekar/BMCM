<?php 
session_start();
if($_SESSION['username'] == ''){
  header('Location: login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="assets/css/style.css" rel="stylesheet">
  <title>BMC</title>
</head>

<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <div class="container shadow-lg p-3 mb-5 bg-body rounded" style="background-color:rgb(230, 226, 221);padding:25px">
    <div class="container " style="background-color:rgb(226, 226, 226);padding:25px;">
      <div class="d-flex justify-content-between">
        <div class="p-2 bd-highlight"><span>Admin Name : <?php echo $_SESSION['name']; ?></span><br>
          <span>Admin Email : <?php echo $_SESSION['username']; ?></span>
        </div>
        <div class="p-2 bd-highlight" style="color: red; font-size: 21px;"><a href="logout.php">Log Out</a></div>
      </div>
    </div>
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
            border-bottom: 5px red solid;
            color: red;
            width: 212px;">Pending</a>
            <a class="nav-link shadow-lg p-3 mb-5 bg-body rounded" href="payment.php" style="margin-left: 24px;
            height: 100px;
            padding-top: 25px;
            border-bottom: 5px rgb(253, 203, 2) solid;
            color:rgb(253, 203, 2);
            width: 212px; ">Payment</a>
            <a class="nav-link active shadow-lg p-3 mb-5 bg-body rounded" aria-current="page" href="approve.php" style="margin-left: 24px;
            height: 100px;
            padding-top: 25px;
            border-bottom: 5px green solid;
            color: green;
            width: 212px;">Approved</a>
          </div>
        </div>
      </div>
    </nav>
