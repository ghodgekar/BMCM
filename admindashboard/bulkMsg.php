<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: index.php');
}
require_once "../config/db.php";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <div class="container-fluid shadow-lg p-3 mb-5 bg-body rounded" style="background-color:rgb(230, 226, 221);padding:25px">
        <div class="container " style="background-color:rgb(226, 226, 226);padding:25px;">
            <div class="d-flex justify-content-between">
                <div class="p-2 bd-highlight"><span><b>Admin Name : </b><?php echo $_SESSION['name']; ?></span><br>
                    <span><b>Admin Email :</b> <?php echo $_SESSION['username']; ?></span>
                </div>
                <div class="p-2 bd-highlight" style="color: green; font-size: 21px;"><a href="bulkMsg.php" class="btn btn-primary">Send Bulk MSG</a></div>
                <div class="p-2 bd-highlight" style="color: red; font-size: 21px;"><a href="logout.php" class="btn btn-danger">Log Out</a></div>
                <div class="p-2 bd-highlight" style="color: green; font-size: 21px;"><a href="pending.php" class="btn btn-secondary">Back</a></div>
            </div>
        </div>

        <div class="container">

        </div>
    </div>
    <?php include 'view_popup.php'; ?>
    <?php include 'document_popup.php'; ?>
    <?php include 'footer.php'; ?>
</body>
</html>