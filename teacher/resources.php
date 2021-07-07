<?php
session_start();
include('include/check_login.php');
include('../include/connection.php');
$resources='set';
if(isset($_GET['type']))
{
  $edit='set';
  $id=$_GET['id'];
  $sql="select * from resources where id='$id' limit 1";
 $result=mysqli_query($db,$sql);
 $resource=mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Resources</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="gal.css" />
     <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="gal.css">
   
  
</head>
<body>

<!-- top banner -->
    
   <?php include 'include/topbar.php'; ?>


<div class="container">
  <div class="row">
    <?php include('include/sidebar.php'); ?>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <form method="post" enctype="multipart/form-data" action="insert.php" >
      <div class="container uploadsection">
     <?php if(isset($_SESSION['error'])) {?>
             <div class="alert alert-danger" role="alert">
  <?php echo $_SESSION['error']; 
  unset($_SESSION['error']);
   ?>
</div><?php } ?>

 <?php if(isset($_SESSION['success'])){?>
             <div class="alert alert-success" role="alert">
  <?php echo $_SESSION['success']; 
  unset($_SESSION['success']);
   ?>
</div><?php } ?>


        
        <div class="col-12">
          <div class="row"   style="color: #224a8f">
          <div class="col-1">
             <i class="fa fa-user"  style="color: #224a8f" aria-hidden="true"></i>
          </div>
          <div class="col-11">Post Resources</div>
          </div>
          <div class="row">
            <textarea name="caption" style="height: 50px;"><?php if(isset($edit)){echo $resource['caption'];} ?></textarea>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px">
              Choose images
              <input type="file" name="image" > 
              
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px;">
              Choose pdf file
              <input type="file" name="pdf" > 
              
            </div>
          </div>



        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px">
             
                   Choose faculty<br>
             <!--     <input type="text" name="faculty" > -->
                 <select name="faculty" id='faculty' required>
                <option selected disabled>choose faculty</option>

                   <option value="bbs">BBS</option>
                   <option value="bed">B.ED</option>
                   <option value="ba">B.A</option>
                 </select>
              
              
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px; margin-left: 5px;">
        
                Choose Year<br>
               <select name="year" id="year" required>
               <option selected disabled>choose year</option>
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
                <option value="third">Fourth</option>

              </select>
              
            </div>
          </div>

          <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px; margin-bottom: px;">
             Choose subject<br>
            <!--  <input type="text" name="subject" >  -->
            <select name="subject" id="subject" required>
              <option selected disabled>choose subject</option>
              
            </select>
             
            
            </div>
          
        
          </div>
          <br>

            <div class="col-lg-6 col-md-4 col-sm-4"><p style=" margin-left: 280px;">
            <button type="submit" name="submit" class="btn btn-success" style="border: none; border-radius: 20px; margin-top: 5px; float: right;">POST</button>

            </p></div>
          </div></div></form>


          

</div>
</div></div>
</body>

<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script >
  var bbs=  "  <option selected disabled>Choose subject</option>"+
                 "<option value='C.English'>C.English</option>"+
                 "<option value='POM'>POM</option>"+
                 "<option value='Accountancy'>Accountancy</option>"+
                 "<option value='Business_statisics'>Business statisics</option>"+
                 "<option value='Economics'>Economics</option>";

        var bed=  "  <option selected disabled>Choose subject</option>"+
                 "<option value='C.English'>C.English</option>"+
                 "<option value='C.Nepali'>C.Nepali</option>"+
                 "<option value='Found_of_edu'>Found Of Edu</option>"+
                 "<option value='Maj_English'>Maj.English</option>"+
                 "<option value='Maj_Health_Phy'>Maj.Health & Phy .Edu</option>"+
                 "<option value='Maj_Nepali'>Maj.Nepali</option>";

          var ba=  " <option selected disabled>Choose subject</option>"+
                 "<option value='C.English'>C.English</option>"+
                 "<option value='C.Nepali'>C.Nepali</option>"+
                 "<option value='Maj_Scociology'>Maj.Sociology</option>"+
                 "<option value='Maj_English'>Maj.English</option>";


  

  $('#faculty').change(function(){
     var year=$('#year').val();
     
     var  faculty=$('#faculty').val();
     fill_subject(year,faculty);
    
  });

  $('#year').change(function(){
     var year=$('#year').val();
    
     var  faculty=$('#faculty').val();
     fill_subject(year,faculty);
    
  });


  function fill_subject(year,faculty)
  {
     
     
      if(year==null || faculty==null)
      {

      }
    else{

      $('#subject').html('');
    if(faculty=='bbs')
    {
      if(year=='first')
      {
           $('#subject').append(bbs);
      }
      if(year=='second' )
      {
      //       $('#subject').append(no);
      // 
       }
      if(year=='third')
      { 
             // $('#subject').append(no);
      }
      if(year=='fourth')
      {
              // $('#subject').append(no);
      }
                                              
    }

     if(faculty=='bed')
    {
      if(year=='first')
      {
           $('#subject').append(bed);
      }
      if(year=='second' )
      {
      //       $('#subject').append(no);
      // 
       }
      if(year=='third')
      { 
             // $('#subject').append(no);
      }
      if(year=='fourth')
      {
              // $('#subject').append(no);
      }
                                              
    }
     if(faculty=='ba')
    {
      if(year=='first')
      {
           $('#subject').append(ba);
      }
      if(year=='second' )
      {
      //       $('#subject').append(no);
      // 
       }
      if(year=='third')
      { 
             // $('#subject').append(no);
      }
      if(year=='fourth')
      {
              // $('#subject').append(no);
      }
                                              
    }


  }

  }
</script>
</body>
</html>