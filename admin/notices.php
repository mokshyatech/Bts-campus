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
</head>
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
      <div class="container uploadsection">
        <div class="col-12">
          <div class="row"   style="color: #224a8f">
          <div class="col-1">
             <i class="fa fa-user"  style="color: #224a8f" aria-hidden="true"></i>
          </div>
          <div class="col-11"><?php if(isset($insert)){echo "Post";} else {echo "Edit";}?> Notice</div>
          </div>
          <form method="post" action="insertnotice.php">
            <?php 
            if(isset($edit))
            {
            ?>

            <input type="hidden" name="id" value="<?php echo $notice['id']; ?>">
           <?php } ?>
             
          <div class="row">
             <textarea name="notice">  <?php if(isset($edit)){echo htmlspecialchars($notice['notice']); } ?></textarea>
          </div>
          <div class="row">
           
       <div class="check" style="margin-top: 10px; margin-left: 7px; color: #224a8f;">
            <div class="col-4"></div>
              <input type="checkbox" name="school" value="Yes"  <?php if(isset($edit)){ if($notice['school']==1 ) {echo "checked"; }   }    ?>>
            <label for="vehicle1">School</label>

             <input type="checkbox" name="plus2" value="Yes"  <?php if(isset($edit)){ if($notice['plus2']==1 ) {echo "checked"; }   }    ?> >
            <label for="vehicle1">plus2</label>

             <input type="checkbox" name="engineering" value="Yes"  <?php if(isset($edit)){ if($notice['engineering']==1 ) {echo "checked"; }   }    ?>>
            <label for="vehicle1">Engineering</label>
          </div>
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



<script src="script.js"></script>





<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>