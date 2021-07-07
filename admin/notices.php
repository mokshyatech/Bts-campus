<?php
session_start();
include('include/connection.php');
$type=$_GET['type'];
$notice='set';


if($type=='insert')
{
  $insert='set';
}
else
{

   $id=$_GET['id'];
   $edit='set';

 $sql="select * from notice where id='$id' limit 1";
 $result=mysqli_query($db,$sql);
 $notice=mysqli_fetch_assoc($result);
 


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




            <!-- content -->
     <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="container uploadsection">
        <div class="col-12">
          <div class="row"   style="color: #224a8f">
          <div class="col-1">
             <i class="fa fa-user"  style="color: #224a8f" aria-hidden="true"></i>
          </div>
          <div class="col-11"><?php if(isset($insert)){echo "Post";} else {echo "Edit";}?> Notice</div>
          </div>
          <form method="post" action="insert.php" enctype="multipart/form-data">
            <?php 
            if(isset($edit))
            {
            ?>

            <input type="hidden" name="id" value="<?php echo $notice['id']; ?>">
           <?php } ?>

               <div class="row">
            <div class="col">
              <label for="vehicle1">TITLE</label><br>
              <input type="text" name="title" style=" border-radius: 5px; background-color: #DEDBD5; border : 1px #DEDBD5; height: 40px; width: 250px;" value="<?php if(isset($edit)){echo htmlspecialchars($notice['title']); } ?>"></div>
              </div>  
             
          <div class="row  mt-2">
             <label for="vehicle1" class="ml-3">NOTICE</label><br>
             <textarea name="notice" class="ml-2">    <?php if(isset($edit)){echo htmlspecialchars($notice['notice']); } ?></textarea>
          </div>
          <?php if(isset($insert)){ ?>
           <div class="row">
             
             <input type="file" name="image" class="mt-3 ml-3 mb-3">
           </div>

        <?php } ?>
          <div class="row">
           
   
            <div class="col-4"><p style="float: right;">
            <div class="col-4"></div>


            
             <?php 
            if(isset($insert))
            {
            ?>

           <button type="submit" name="notice_insert" class="btn btn-primary" style="background-color: #224a8f; border: none; border-radius: 20px; margin-top: 5px; margin-left: 240px;">POST</button>
           <?php } 

             else   
                      {
            ?>

           <button type="submit" name="notice_update" class="btn btn-primary" style="background-color: #224a8f; border: none; border-radius: 20px; margin-top: 5px; margin-left: 240px;">Update</button>
           <?php } ?>



            </p></div>


          </div>
        </form>

        </div>
        
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