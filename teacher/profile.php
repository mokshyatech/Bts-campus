<?php
include('../include/connection.php');
$profile=true;

session_start();

class password extends database
  {
   
     public function checkoldpassword($postData)
    {
      
      $new_password = $this->con->real_escape_string($postData['new_password']);
      $old_password = $this->con->real_escape_string($postData['old_password']);
      $id = $this->con->real_escape_string($postData['id']);
   

     if(strlen($new_password)<6)
     {
      header("location:profile.php?type=changepassword");
           $_SESSION['new_error']="password must be atleast 6";
           exit();
     }   
 
      $query = "select * from teacher where id='$id' and password='$old_password' ";


      $result = $this->con->query($query);
    if ($result->num_rows>0) {

         $this->updatePassword($new_password,$id);
           
        }else{
           header("location:profile.php?type=changepassword");
           $_SESSION['old_error']="old password didnot match";
           exit();
      
        }


      
    }

    public function updatePassword($new_password,$id)
    {

      $query = "update teacher set password='$new_password' where id='$id' ";
      $sql = $this->con->query($query);
      if ($sql==true) {

         $_SESSION['success']="Password has been changed successfully";
         header("location:profile.php?type=changepassword");
         exit();
      }else{
        $_SESSION['error']="somthing went wrong!!!";
         header("location:profile.php?type=changepassword");
          
      }
        }
    


 

  }


if(isset($_POST['change']))
{
   $obj=new password();
   $obj->checkoldpassword($_POST);
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>

    <!-- css  -->
    <link rel="stylesheet" type="text/css" href="../frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
    <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  </head>
  <body>
    
  <?php 
        include('include/topbar.php');
   ?>

    
    <?php if(!isset($_GET['type'])) {?>

    <!-- about us banner -->
    <div class="row justify-content-center">
      <div class="col-lg-6">
        
          
      <h3 style="text-align: center; color: #6AAC6F">Welcome <?php echo $_SESSION['teacher'];?></h3>
        <?php 
 $query = ("SELECT * FROM teacher WHERE id='" . $_SESSION["teacher_id"] ."'");
  $result1 = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result1);
?>
<div class="text-center">
  
   <img src="../photos/<?php echo $row['image']; ?>" onerror="this.src='https://i.stack.imgur.com/34AD2.jpg';" alt="" class="rounded" id="myImg" style=" width: 250px; height: 250px; " /> 

</div>
 <table class="table table-bordered">
  <tbody>
    <style type="text/css">
      tr th,td{
        text-align: center;
      }
    </style>
    <tr>
      
      <th scope="col">First Name</th>
      <td scope="col"><?php echo $row['firstname'];?></td>
      
    </tr>
    <tr>
      <th scope="col">Last Name</th>
      <td scope="col"><?php echo $row['lastname'];?></td>
    </tr>
    <tr>
      <th scope="col">Address</th>
      <td scope="col"><?php echo $row['address'];?></td>
    </tr>
    <tr>
      <th scope="col">Phone No</th>
      <td scope="col"><?php echo $row['phone'];?></td>
    </tr>
    <tr>
      <th scope="col">Email</th>
      <td scope="col"><?php echo $row['email'];?></td>
    </tr>
    
    <tr >
      <th colspan="1"></th>
      <td><a href="profile.php?type=changepassword" style="color: white" class="btn btn-primary btn-sm">change password</a></td>
        
    </tr>
    
  </tbody>
</table>
        
    </div>
        </div>
      
<?php }  else {?>


   <div class="row justify-content-center">
      <div class="col-lg-6">

        <?php if(isset($_SESSION['success'])){ ?>
        <div class="alert alert-success mt-3" role="alert">
        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
    </div>
<?php } ?>

   <?php if(isset($_SESSION['error'])){ ?>
        <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
    </div>
<?php } ?>
   <h3 style="text-align: center; color: #6AAC6F">Change Password</h3>


      </div>
    </div>

<div class="row justify-content-center">
   <div class="col-md-offset-3 col-md-3">
    <form action="profile.php?type=changepassword" method="post">
      <div class="form-group">
      <label for="old_password">Old Password</label>
        <input type="password" required name="old_password" class="form-control">
        <small style="color: red; font-style: italic; margin-left: 4px;"><?php  if(isset($_SESSION['old_error'])){ echo $_SESSION['old_error']; unset($_SESSION['old_error']); }?></small>
      </div>

       <div class="form-group">
      <label for="old_password">New  Password</label>
        <input type="password" required name="new_password" class="form-control">
        <small style="color: red; font-style: italic; margin-left: 4px;"><?php  if(isset($_SESSION['new_error'])){ echo $_SESSION['new_error']; unset($_SESSION['new_error']); }?></small>
      </div>
      <div class="form-group">
        <input type="submit" name="change"  class="form-control btn-primary btn-sm btn">
      </div>
       <input type="hidden" name="id" value="<?php echo $_SESSION['teacher_id'];?>">
      </form>
    </div>
  
    </div>

<?php } ?>
    
    <!-- footer -->
    
<?php include "../include/footer.php"; ?>
    <!-- js setup -->
    
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
