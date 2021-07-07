<?php

   session_start();
   if(isset($_SESSION['login_as_teacher']))
   {
     header('location:../teacher/index.php');
   }
   if(isset($_SESSION['login_as_student']))
   {
      header('location:../index.php');
   }

  

if(isset($_GET['user']))
{

  if($_GET['user']=='teacher')
  {
     $teacher='set';
  } 
  else
  {
    $student='set';
  }
}
else
{
  $student='set';
}

?> 
<!DOCTYPE html>
<html>
<head>
  <title><?php if(isset($student)){echo "Student";} else {echo "Teacher";} ?> Login</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./login.css">
    <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
</head>
<body>

  
<div class="container">
  <div style="margin-left: 0px;
  margin-bottom: 5px; 
  ">
  <button type="button" class="btn btn-primary btn-lg"><a href="../index.php" style="color: black; text-decoration: none;">Home <i class="fa fa-arrow-circle-o-left"></i></a></button></div>
    <div class="row formtitle">
      <h5><?php if(isset($student)) echo "STUDENT"; if(isset($teacher)) echo "TEACHER"; ?> LOGIN FORM</h5>
    </div>
    <div class="row form body">
      <div class="col-lg-7 col-md-12 col-sm-12 bodycol">
        
        <form action="check.php"  method="post" >
  <div class="form-row">
    
  <div class="form-group col-md-12">
    <?php if(isset($student)){ ?>
       <label for="inputRoll">UNIQUE ROLL NUMBER</label>
   <input type="text" required name="uniquecode" class="form-control" id="inputEmail" placeholder=" Unique code" autocomplete="off" value="<?php if(isset($_SESSION['uniquecode'])){echo $_SESSION['uniquecode']; unset($_SESSION['uniquecode']); } ?>">  
   
    <?php } ?>
    <?php if(isset($teacher)){ ?>
        <label for="inputRoll">EMAIL ID</label>
   <input type="email" required name="email" class="form-control" id="inputEmail" placeholder=" Email Id" autocomplete="off" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email']; unset($_SESSION['email']); } ?>">  
  
    <?php } ?>   

     
    
  </div>
  <div class="form-group col-md-12">
    <label for="inputPassword">PASSWORD</label>
    <input type="password" required name="password" class="form-control" id="inputEmail" placeholder=" Password" autocomplete="off" value="<?php if(isset($_SESSION['password'])){echo $_SESSION['password']; unset($_SESSION['password']); } ?>">  
    <span class="error"><small style="color: red;font-style:italic;"><?php if(isset($_SESSION['error'])){ echo $_SESSION['error']; unset($_SESSION['error']);}?></small></span>  
    
  </div>
  
</div>
  
  
  <div class="form-row">
    <div class="form-group col-md-12" style="text-align: center;">

  
       <?php if(isset($student)){?>
      <input type="submit" name="student" value="LOGIN" class="btn btn-primary" style="background-color: #224a8f; border: none;">
     <?php } ?>
       <?php if(isset($teacher)){?>
      <input type="submit" name="teacher" value="LOGIN" class="btn btn-primary" style="background-color: #224a8f; border: none;">
     <?php } ?>
    </div>
  </div>
   
   
</form>
      </div>
      <div class="col-lg-5 col-md-12 col-sm-12 textcol" style="background-color: #224a8f; opacity: 60%; padding-top: 50px; text-align: center; color: white;">
        <h1>WELCOME</h1>
        <h4 style="padding-top: 50px;">LOGIN TO<br> CONTINUE ACCESS<br> PAGE</h4>
      </div>

      
    </div>
  </div>
 

<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
  <?php include"../include/expireMessage.php"; ?>
</body>
</html>


