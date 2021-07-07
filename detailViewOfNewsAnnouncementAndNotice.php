<?php
session_start();
include "include/connection.php";
include "include/extra.php";

$id;

if(isset($_GET['id'])){
$id=$_GET['id'];

}else{
  $id=1;
}


if(isset($_GET['type'])){

 
    $sql="select * from notice where id=$id limit 1";

    $result=mysqli_fetch_assoc(mysqli_query($db,$sql));
    $notice='set';
 
}else{
  
  $sql="select * from news_and_event where id=$id limit 1";
 
  $result=mysqli_fetch_assoc(mysqli_query($db,$sql));
  
}



?>
<!DOCTYPE html>
<html>
<head>
  <title>news and announcement details</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="frontpage/css/style.css" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="description/description.css">
      <link rel="shortcut icon" href="frontpage/images/logo.png" />
      <style type="text/css">
            .img {
      width: 500px;
      height: 400px;
      border:2px solid #fff;
      background: url(img/tiger.png) no-repeat;
      box-shadow: 10px 10px 5px #ccc;
      -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      -khtml-box-shadow: 10px 10px 5px #ccc;
    }
      </style>

</head>
<body>
  

<!-- top banner -->
    <?php include"include/banner.php";?>

    <!-- navbar -->
  <!-- navbar -->
    <?php include "include/navbar.php"; ?> 
    <!-- home image -->
 
    

   

    <!-- message section -->
    <div class="container-fluid  ">
      <div class="row message p-4">
         <div class="col-lg-12 col-sm-12 col-md-6  p-4 ">
         
            
             <div class="introduction">
            <center><h4 class="text-uppercase"><?php if(!isset($notice)){echo $result['post'];}else{echo $result['title'];}  ?>
            </h4></center>
           
            
          </div>

         
  
        </div>
             
        <?php
         if($result['image']!=null || $result['image']!=""){ 

          ?>
        <div class="col-lg-6 col-sm-12 col-md-6  p-4 ">
          <div class="row p-2">
            
             <div class="introduction">
           
            <div class="">
              <?php if(isset($notice)){ ?>
              <img class="img"  src="admin/notice_file/<?php echo htmlentities($result['image']); ?>" alt="Not Available!" />
            <?php }else {?>
              <img class="img"  src="admin/news_and_announcement_file/<?php echo htmlentities($result['image']); ?>" alt="Not Available!" />
          <?php } ?>
            </div>
            
          </div>

          </div>
  
        </div>
      <?php } ?>
        <div class="mx-auto col-lg-6 col-sm-12 col-md-6 p-4">
          <div class="row p-2">
            
             <div class="introduction">
           
            <p>
                <?php if(!isset($notice)){echo link_clickable($result['description']);}else{echo link_clickable($result['notice']);}  ?>
            </p>
          </div>

          </div>
   
         
        </div>
        

      </div>
    </div>

    <!-- footer -->
 <?php include('include/footer.php'); ?>


<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>