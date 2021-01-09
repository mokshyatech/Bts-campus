<?php
    $fnameErr = $lnameErr = $addressErr = $emailErr  = $passwordErr = $contactErr= false;  
  
        $fname = input_data($_POST["fname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                $_SESSION['fnameErr']= "Only alphabets and white space are allowed";
                $fnameErr=true;  

            }  
    
      
    //Email Validation   
  
            $lname = input_data($_POST["lname"]);  
            // check that the e-mail address is well-formed  
           if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {   
                $_SESSION['lnameErr'] = "Only alphabets and white space are allowed";  
                $lnameErr=true;
            }  
    
    
            $address = input_data($_POST["address"]);  
            // check that the e-mail address is well-formed  
           if (!preg_match("/^[a-zA-Z0-9 -_:,]*$/",$address)) {   
                $_SESSION['addressErr'] = "Only alphabets, number and white space are allowed";  
                $addressErr=true;
            }  
      
      
    //URL Validation      
          if(!isset($edit))
         {

            $email = input_data($_POST["email"]);  
            // check if URL address syntax is valid  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               
                $_SESSION['emailErr'] = "Enter valid email";
                $emailErr=true;  


           }

             $sql="select * from engineering_teacher where email='$email' limit 1 ";

            $result=mysqli_query($db,$sql);

            $check=mysqli_num_rows($result);
          
            if($check>0)
             {  
              
                $teach=mysqli_fetch_assoc($result);
                $_SESSION['emailErr'] = " Email address is matched to  ".$teach['firstname']." ".$teach['lastname'];
                $emailErr=true;  
             } 
             
          }

     
    
            $contact = input_data($_POST["contact"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[0-9]*$/",$contact) || strlen ($contact) != 10) {
            	
                $_SESSION['contactErr']= "Only 10 digits are allowed";  
                $contactErr=true;
            }      
      

    
        $password = input_data($_POST["password"]);  
       $uppercase = preg_match('@[A-Z]@', $password);
       $lowercase = preg_match('@[a-z]@', $password);
       $number    = preg_match('@[0-9]@', $password);
       

      if(!$uppercase || !$lowercase || !$number ||  strlen($password) < 6)   
            
         {
                $_SESSION['passwordErr'] = "Passowrd must be atleast 6 ,one uppercase and number";  
                $passwordErr=true;
       }
     

       

       if(isset($edit))
       {

        if($fnameErr==true || $lnameErr==true || $addressErr==true ||  $passwordErr==true || $contactErr==true)  
       {
       	 header("location:engineering_teacher_registration.php?type=edit&&id=$id");
       	 exit();
       }
      }

      else
      {  
      	  if($fnameErr==true || $lnameErr==true || $addressErr==true || $emailErr==true || $passwordErr==true || $contactErr==true)  
       {
       	 header("location:engineering_teacher_registration.php");
       	 exit();
       }

      }




?>