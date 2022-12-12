<?php 
session_start();

if(!isset($_SESSION['IS_LOGIN'])){
header('location:login.php');
die();
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="d-flex">
    <div class="col-sm-2">
        <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action bg-primary text-white">Home</a>
        <a href="#" class="list-group-item list-group-item-action">Second item</a>
        <a href="logout.php" class="list-group-item text-danger">Logout</a>
        </div>
    </div>

<div class="col-sm-10 bg-primary">
dddd
</div>
</div>

</body>
</html>

