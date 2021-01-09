<?php
session_start();
include('include/connection.php');

 $gallery='set';

  if(isset($_GET['type']))
  {
    $edit='set';
    $id=$_GET['id'];
    $sql="select * from photos where id='$id' limit 1";
   $result=mysqli_query($db,$sql);
   $photo=mysqli_fetch_assoc($result);
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="landing.css">
</head>
<style>
   .rounded{

    height: 200px;
    width: 300px;
    border-radius: 50%;
   }
  </style>
<body>
</body>
<?php 

include('include/check_login.php');

?>


<!-- top banner -->
    
   <?php 
        include('include/topbar.php');
   ?>

<div class="container">
  <div class="row">

      

     <?php 
         include('include/sidebar.php');
     ?>




            <!-- content -->
    <div class="col-lg-8 col-md-8 col-sm-12">
      <form method="post" enctype="multipart/form-data" action="upload.php" >
        <?php if(isset($edit)) {?>
          <input type="hidden" name="id" value="<?php echo $photo['id']; ?>">
        <?php } ?>
      <div class="container uploadsection">
        <div class="col-12">
          <div class="row"   style="color: #224a8f">
          <div class="col-1">
             <i class="fa fa-user"  style="color: #224a8f" aria-hidden="true"></i>
          </div>
          <div class="col-11">Post Pictures </div>
          </div>
          <div class="row">
            <textarea name="caption"><?php if(isset($edit)) echo $photo['caption'];?></textarea>
          </div>
          <?php if(isset($edit)){ ?>
          <div class="row mt-4">
            <img src="photo/<?php echo $photo['photo']; ?>" class="rounded" alt="">
          </div>
        <?php } ?>

          <div class="row">
            <?php if(!isset($edit)) {?>
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px">
              <input type="file" name="image" style="overflow: hidden;"> 
              
            </div></div>
            <div class="row">

            <div class="check" style="margin-top: 12px; margin-left: 20px;color: #224a8f;">
            
          
             <input type="checkbox" name="plus2" value="Yes">
            plus2
                <input type="checkbox" name="school" value="Yes">
            School


             <input type="checkbox" name="engineering" value="Yes">
            Engineering
          </div>
        <?php }  else {?>
            <div class="check" style="margin-top: 12px; margin-left: 0px; color: #224a8f;">
           
          
             <input type="checkbox" name="plus2" value="Yes" <?php if ($photo['plus2']==1) echo "checked"; ?>>
            plus2
                <input type="checkbox" name="school" value="Yes" <?php if ($photo['school']==1) echo "checked"; ?> >
            School


             <input type="checkbox" name="engineering" value="Yes" <?php if ($photo['engineering']==1) echo "checked"; ?>>
            Engineering
          </div>
             </div>

        <?php } ?>
            <div class="col-4">
            <div class="col-4"></div>
           
              
            </div>
            <?php if(isset($edit)){ ?>

          <div class="col-lg-10 col-md-10 col-sm-12"><p style=" margin-top: 5px;">

            <button type="submit" name="update" class="btn btn-success" style="border: none; border-radius: 20px; margin-top: 5px;">update</button>

            </div>

          <?php } else { ?>
             <div class="col-lg-2 col-md-2 col-sm-12"><p>

            <button type="submit" name="submit" class="btn btn-success" style="border: none; border-radius: 20px; margin-top:5px;">POST</button>

            </div>

          <?php } ?>

          
</form>

          </div>

        </div>
        
      </div>
    </div>
  
  </div>
</div>



<script src="script.js"></script>





<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>