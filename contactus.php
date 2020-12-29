<?php
include "include/connection.php";
session_start();
$contactus='set';

$nameErr = $emailErr= $phoneErr= $MessageErr= "";  
$phone = $email = $name = $Message= "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      

 if (empty($_POST["name"])) {  
        $nameErr = " What is your name";  
    } else {  
            $name = input_data($_POST["name"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
               
                $nameErr = "Enter valid name";  
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

    if (empty($_POST["phone"])) {  
        $phoneErr = " Contact number is required";  
    } else {  
            $phone = input_data($_POST["phone"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[0-9]*$/",$phone) && strlen ($phone) != 10){
                $contactErr = "Contact should be of 10 digits";  
            }      
    }  
 
       

         if (empty($_POST["Message"])) {  
        $MessageErr = " What is your name";  
    } else {  
            $Message = input_data($_POST["Message"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[a-zA-Z0-9 ,.-_]*$/",$Message)) {
               
                $MessageErr = "Enter valid name";  
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
  <title>ContactUs</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('include/style.php'); ?>
  <link rel="stylesheet" type="text/css" href="frontpage/asset/contact.css">
  
</head>
<body>

  <!-- top banner -->
     <?php include('include/banner.php'); ?>

    <!-- navbar -->
   <?php include('include/navbar.php'); ?>


  <div class="container " style="margin-top: 20px; ">
    <div class="row">
      <div class="col " style="background-color: #25408F; align-items: center; height: 580px;" >
        <h2 style="text-align: center;transform: translateX(-40px); color: white; margin-top:20px ; margin-bottom: 20px;">CONTACT US</h2>

        
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

          <div style="max-width:400px;margin:auto"> 
        <div class="input-icons"> 
  <div class="form-group row ">
    <div class="col-sm-10">
      <i class="fa fa-user icon"></i>
      <input type="text" name = "name"class="form-control input-field" id="inputName3" placeholder="Name" autocomplete="off">
      <span class="error"><?php echo $nameErr; ?> </span> 
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <i class="fa fa-phone icon"></i>

      <input type="text" name="phone" class="form-control input-field" id="inputPhone3" placeholder="Phone number(+977)" autocomplete="off">
      <span class="error"><?php echo $phoneErr; ?> </span> 
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <i class="fa fa-envelope icon" ></i>
      <input type="email" name ="email" class="form-control input-field" id="inputEmail3" placeholder="Email" autocomplete="off">
      <span class="error"><?php echo $emailErr; ?> </span> 
    </div>
  </div>


   <div class="form-group row">
    <div class="col-sm-10">
      <i class="fa fa-comment icon"></i>
    <textarea class="form-control input-field" name = "Message" id="exampleFormControlTextarea1" placeholder="Message" style="height: 250px;" ></textarea>
    <span class="error"><?php echo $MessageErr; ?> </span> 
    </div>
  </div>
  
  
  <div class="form-group row">
    <div class="col-sm-10" style="text-align: center;">
      <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary" style="background-color: #28ea25; border: none;">
    </div>
  </div>
</div>
</div>
</form>

      </div>
      <div class="col" style="text-align: center; color: white;" >
        <div class="text-section">
        <h3>BUDHANILKANTHA TECHNICAL SCHOOL</h3>
        <P>01-4372300<br>
          bnktechschool@gmail.com<br>
          Budhanilkantha-3, Kathmandu, Nepal
        </P>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14120.288038342855!2d85.3624916!3d27.7767553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x75353d0ced2c3ea5!2sBudhanilkantha%20Technical%20School!5e0!3m2!1sen!2snp!4v1602489148755!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
      </div>
    </div>
  </div>




<!-- footer -->
<?php include('include/footer.php'); ?>

<?php  
    if(isset($_POST['submit'])) {  
    
       
          if($nameErr == "" && $phoneErr =="" && $emailErr == "" && $MessageErr == "" ) {
        
    mysqli_query($db,"INSERT INTO user_message(name,email,phone,message) VALUES('$name', '$email','$phone','$Message');"); 

  
  echo"Your message is send successfully.";
         
    } else { 
    ?>
    <div class="box" style="position: fixed; margin-top: 100px; background-color: red; width: 250px;">
    <span class="close">&times;</span>
    <h3> <b>You didn't filled up the form correctly.</b> </h3>
  </div> 
       
        <?php 
    }  
     
  }
?>  

<?php include('include/script.php'); ?>
</body>
</html>

