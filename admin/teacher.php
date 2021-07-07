<!DOCTYPE html>
<html>
<head>
  <title>Teacher registration</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./Registration.css">
  <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
</head>
<style>
.error{
  color: red;
}
  </style>

<body>

<?php  
// define variables to empty values 
session_start();
include('include/connection.php');
include('include/middleware.php');
if(isset($_GET['type']))
{
  $id=$_GET['id'];
  $edit='set';
  $sql="select * from teacher where id='$id' limit 1 ";
  $result=mysqli_query($db,$sql);
  $teacher=mysqli_fetch_assoc($result);

}

?>  
  <div class="container">
        <div class="row formtitle">
            <h5>CAMPUS TEACHER REGISTRATION FORM</h5>
        </div>
        <div class="row form body">
            <div class="col-lg-7 col-md-12 col-sm-12 bodycol">
 
<form method="post" action="insert.php" >    
    <?php 
    if(isset($edit))
    {
     ?>
     <input type="hidden" name="id" value="<?php echo $teacher['id'];?>">

   <?php } ?>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">FIRST NAME</label>  
    <input type="text" name="fname" class="form-control" id="inputName" required placeholder="Name" autocomplete="off"
    value="<?php 

    if(isset($_SESSION['fname'])){echo $_SESSION['fname']; unset($_SESSION['fname']); }
    else{ 
         if(isset($edit)){ echo $teacher['firstname'];  }}
    ?>"
    >  
    <span class="error"><small><?php if(isset($_SESSION['fnameErr'])){ echo $_SESSION['fnameErr']; unset($_SESSION['fnameErr']); }  ?></small></span> 

      </div>
   <div class="form-group col-md-6">
      <label for="inputName">LAST NAME</label>  
    <input type="text" required name="lname" class="form-control" required id="inputName" placeholder="Last Name" autocomplete="off" 

  value="<?php if(isset($_SESSION['lname'])){echo $_SESSION['lname']; unset($_SESSION['lname']); }else if(isset($edit)){ echo $teacher['lastname'];  }  ?>"
    >  
     <span class="error"><small><?php if(isset($_SESSION['lnameErr'])){ echo $_SESSION['lnameErr']; unset($_SESSION['lnameErr']); }  ?></small></span>
    </div>  
</div>
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail">ADDRESS</label>   
    <input type="text" requird name="address" class="form-control" required id="inputAddress" placeholder="Address" autocomplete="off"
   value="<?php if(isset($_SESSION['address'])){echo $_SESSION['address']; unset($_SESSION['address']); } else{if(isset($edit)){ echo $teacher['address'];  }} ?>"
    >  
     <span class="error"><small><?php if(isset($_SESSION['addressErr'])){ echo $_SESSION['addressErr']; unset($_SESSION['addressErr']); }  ?></small></span>
    </div> 
   <div class="form-group col-md-12">
      <label for="inputEmail">EMAIL</label>  <?php if(isset($edit)) {?><small>(you can't edit email)</small><?php } ?>
    <input type="email" required name="email" class="form-control"  placeholder=" Email ID" autocomplete="off"
   value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email']; unset($_SESSION['email']); }else if(isset($edit)){ echo $teacher['email'];  }?>"
   <?php if(isset($edit)){
    echo "disabled";
   } ?>
    >  
     <span class="error"><small><?php if(isset($_SESSION['emailErr'])){ echo $_SESSION['emailErr']; unset($_SESSION['emailErr']); }  ?></small></span> 
    </div>
    <?php if(!isset($edit)){ ?>
         <div class="form-group col-md-12">
      <label for="inputEmail">CONFIRM EMAIL</label> 
    <input type="email" required name="cemail" class="form-control"  placeholder="Confirm Email ID" autocomplete="off"
   value="<?php if(isset($_SESSION['cemail'])){echo $_SESSION['cemail']; unset($_SESSION['cemail']); }?>">

     <span class="error"><small><?php if(isset($_SESSION['cemailErr'])){ echo $_SESSION['cemailErr']; unset($_SESSION['cemailErr']); }  ?></small></span> 
    </div>

    <?php } ?>
    <div class="form-group col-md-12">
      <label for="inputEmail">CONTACT NO</label>
    <input type="text" name="contact" required class="form-control" id="inputFathername" placeholder=" Your's contact" autocomplete="off"
    value="<?php if(isset($_SESSION['contact'])){echo $_SESSION['contact']; unset($_SESSION['contact']); } else if(isset($edit)){ echo $teacher['phone'];  } ?>"
    >  
     <span class="error"><small><?php if(isset($_SESSION['contactErr'])){ echo $_SESSION['contactErr']; unset($_SESSION['contactErr']); }  ?></small></span>
    </div>
</div>

        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail">PASSWORD</label>  <a href="#" class="show-password" ><i class="fa fa-eye-slash" id="font-eye"></i></a>
    <input type="password" name="password" class="form-control" id="password" placeholder=" Password" required autocomplete="off"  
   value="<?php if(isset($_SESSION['password'])){echo $_SESSION['password']; unset($_SESSION['password']); }else if(isset($edit)){ echo $teacher['password'];  } ?>"
    
    >  
    <span class="error"><small><?php if(isset($_SESSION['passwordErr'])){ echo $_SESSION['passwordErr']; unset($_SESSION['passwordErr']); }  ?></small></span>
    </div>

    
    
</div>
        <div class="form-row">
    <div class="form-group col-md-12" style="text-align: center;"> 

 
     <?php if(isset($edit)){?>
   <input type="submit" name="teacher_edit" value="update" class="btn btn-primary" style="background-color: #224a8f; border: none;">
     <?php } else {?>
         <input type="submit" name="teacher_insert" value="REGISTER" class="btn btn-primary" style="background-color: #224a8f; border: none;">


     <?php } ?>   


    </div></div>                             
</form>  
  </div>
  <div class="col-lg-5 col-md-12 col-sm-12 textcol" style="background-color: #224a8f; opacity: 60%; padding-top: 100px; text-align: center; color: white;">
                <h1>Campus</h1>
                <h4 style="padding-top: 50px;">REGISTER TO<br> CONTINUE ACCESS<br> PAGE</h4>

                <br>
                <a href="teacher_table.php" class="btn-primary btn btn-sm">Click to go previous page</a>
            </div>

            
        </div>
    </div>

 

<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){

    });

    
    $('.show-password').click(function(){

      if($('#font-eye').hasClass('fa-eye-slash'))
      {
          
      $('#font-eye').removeClass('fa-eye-slash');
      $('#font-eye').addClass('fa-eye');
      $('#password').attr('type','text');
      }

      else
      {
        $('#font-eye').removeClass('fa-eye');
        $('#font-eye').addClass('fa-eye-slash');
         $('#password').attr('type','password');
      }

      

      
    });

</script>
</body>  
</html> 


