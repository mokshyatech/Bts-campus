<?php
session_start();

include('../include/connection.php');
include('include/check_login.php');


?>

<!DOCTYPE html>
<html>
<head>
  <title>BUDHANILKANTHA TECHNICAL CAMPUS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="landing.css">
   <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
  
</head>
<body>
</body>



<!-- top banner -->
    
   <?php 
        include('include/topbar.php');
   ?>

<div class="container">
  <div class="row">
     <?php 
         include('include/sidebar.php');
     ?>
      <div class="col-md-8 mt-5">
    <div class="about-img">
          <img src="pic.jpeg" style="height: 350px; width: 650px;">
        </div>
          <div class="title">
            
                <h4 style=" color: blue; font-size: 100px; margin-bottom: 150px;">WELCOME</h4></a>
              
          </div>
  </div>
  
  </div>
</div>


<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>