<?php
include '../include/connection.php';

session_start();
$passwordErr = $emailErr= "";  
$password = $email = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      


     if (empty($_POST["password"])) {  
        $passwordErr = "Enter the Password";  
    } else {
        $password = input_data($_POST["password"]);  
       $uppercase = preg_match('@[A-Z]@', $password);
       $lowercase = preg_match('@[a-z]@', $password);
       $number    = preg_match('@[0-9]@', $password);
       

if(!$uppercase || !$lowercase || !$number ||  strlen($password) < 8)   
            
         {
                $passwordErr = "Invalid Password";  
            }      
    }  
 if (empty($_POST["email"])) {  
        $emailErr = " What is your email";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check if URL address syntax is valid  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               
                $emailErr = "Enter valid email";  
            }      
    } 
  }
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?> 
<!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./login.css">
</head>
<body>
</body>

<div class="container">
  <div style="margin-left: 0px;
  margin-bottom: 5px; 
  ">
  <button type="button" class="btn btn-primary btn-lg"><a href="../index.php" style="color: black; text-decoration: none;">Home <i class="fa fa-arrow-circle-o-left"></i></a></button></div>
    <div class="row formtitle">
      <h5>SCHOOL TEACHER LOGIN FORM</h5>
    </div>
    <div class="row form body">
      <div class="col-lg-7 col-md-12 col-sm-12 bodycol">
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" >
  <div class="form-row">
    
  <div class="form-group col-md-12">
    <label for="inputRoll">EMAIL ID</label>
   <input type="email" name="email" class="form-control" id="inputEmail" placeholder=" Email Id" autocomplete="off">  
    <span class="error"><?php echo $emailErr; ?> </span>  
    
  </div>
  <div class="form-group col-md-12">
    <label for="inputPassword">PASSWORD</label>
    <input type="password" name="password" class="form-control" id="inputEmail" placeholder=" Password" autocomplete="off">  
    <span class="error"><?php echo $passwordErr; ?> </span>  
    
  </div>
  
</div>
  
  
  <div class="form-row">
    <div class="form-group col-md-12" style="text-align: center;">
      <input type="submit" name="submit" value="LOGIN" class="btn btn-primary" style="background-color: #224a8f; border: none;">
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
</body>
</html>



<?php  
    if(isset($_POST['submit'])) {  
    
       $count=0;

        
    if($passwordErr == "" && $emailErr == "" ) {

      $result = mysqli_query($db, "SELECT * FROM school_teacher WHERE  email = '$email' and password = '$password'");
      $row= mysqli_fetch_assoc($result);
      $count=mysqli_num_rows($result);

      if($count==0)
      {
        ?>
              
          <div class="msg" style="background-color: #a7cfef; margin-top: 400px; height: 100px; width: 550px; position: fixed; text-align: center;">
      <?php
      echo"The email and password doesn't match";
      ?>
    
      </div>
              
        <?php
      }
      else
      {
        
        $_SESSION['teacher_user'] = $row['firstname'];
       
        header('Location: ../school/teacher/teacherlanding.php');
        
      }
    }else{
?>
           
      <div class="msg" style="background-color: #a7cfef; margin-top: 400px; height: 100px; width: 550px; position: fixed; text-align: center;">
      <?php
      echo"Incorrect data Please fill correct data!!!";
      ?>
    
      </div>   
            
        <?php
  
}
}
?>
  
  
