<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maratha Mandal</title>
  <link rel="icon" type="image/x-icon" href="/image/fevicon icon.png">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/news.css" rel="stylesheet">
  <link href="assets/css/header.css" rel="stylesheet">
  <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="d-flex justify-content-between" style="background-color: #ed0500;">
    <div class="p-2 bd-highlight"><a href="https://wa.me/+919833615551"><img src="./image/whataap.png" class="img-fluid"
          alt="..." style="margin-left: 47px;"></a></div>
      <?php 
        if(!isset($_SESSION['member_username'])){
      ?>
        <div class="p-2 bd-highlight">
          <a class="btn btn-primary" href="register.php">Sign Up</a></button>
          <a class="btn btn-primary" href="login.php">Sign In</a></button>
        </div>
      <?php }else{ ?>
        <div class="p-2 bd-highlight">
          <a class="btn btn-danger" style="background-color:#f7e510" href="userpanel/index.php">Profile</a></button>
          <a class="btn btn-primary" href="logout.php">Logout</a></button>
        </div>
      <?php } ?>
    </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./image/logo1.png" alt="" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php if ($activePage =="index") {?> active <?php } ?>" aria-current="page" href="index.php">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link <?php if ($activePage =="about") {?> active <?php } ?>" href="about.php">About Us</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About us
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Journey.php">Journery</a></li>
                <li><a class="dropdown-item" href="logo.php">Logo</a></li>

                <li><a class="dropdown-item" href="executive_committee.php">Executive_Committee </a></li>
                

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($activePage =="events") {?> active <?php } ?>" href="events.php">Events & Seminars </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($activePage =="phone_directory") {?> active <?php } ?>" href="phonedirectory.php">Phone Directory </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link <?php if ($activePage =="executive_committee") {?> active <?php } ?>" href="executive_committee.php">Executive_Committee </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link <?php if ($activePage =="news_media") {?> active <?php } ?>" href="news_media.php">News & Media </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Activity
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Housing Scheme</a></li>
                <li><a class="dropdown-item" href="#">Exam & Courses</a></li>

                <li><a class="dropdown-item" href="#">Job Counselling </a></li>
                <li><a class="dropdown-item" href="#">Youth</a></li>

                <li><a class="dropdown-item" href="#">Women</a></li>
                <li><a class="dropdown-item" href="others.php">Other</a></li>

              </ul>
            </li>

           

            <li class="nav-item">
              <a class="nav-link <?php if ($activePage =="contact") {?> active <?php } ?>" href="contact.php">Contact Us</a>
            </li>
            
          </ul>
          <button type="button" class="btn btn-warning"><a href="communityshop.php" style="color: #ffffff; text-decoration: none;">Community Shop</a></button>
        </div>
      </div>
    </nav>