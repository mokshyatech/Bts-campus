<?php
    $fnameErr = $lnameErr = $addressErr = $emailErr =$cemailErr = $passwordErr = $contactErr= false;  
  
        $fname = input_data($_POST["fname"]);  
            
           
               if(name($_POST['fname'])==true) {  
                $_SESSION['fnameErr']= "Only alphabets and white space are allowed";
                $fnameErr=true;  

            }  
    
      
    //Email Validation   
  
            $lname = input_data($_POST["lname"]);  
          
           if (name($_POST['lname'])==true) {   
                $_SESSION['lnameErr'] = "Only alphabets and white space are allowed";  
                $lnameErr=true;
            }  
    
    
            $address = input_data($_POST["address"]);  
            // check that the e-mail address is well-formed  
           if (address($_POST['address'])==true) 
           {   
                $_SESSION['addressErr'] = "Only alphabets, number and white space are allowed";  
                $addressErr=true;
            }  
      
      
        
      
            
        

          
  if(!isset($edit))
  {

          if(emailAlreadyExist($_POST['email'],'teacher')==true)
          {   


                $teach=mysqli_fetch_assoc($result);
                $_SESSION['emailErr'] = " Email address is matched with  ".getNameFromEmail($_POST['email'],'teacher');
                $emailErr=true;  
           }


           $email = input_data($_POST["email"]);  
           $cemail = input_data($_POST["cemail"]);  
            // check if URL address syntax is valid  

            if (email($_POST['email'])==true) 
            {
               
                $_SESSION['emailErr'] = "Enter is invalid";
                $emailErr=true;  

           }
           if($email!=$cemail)
           {
              $cemailErr=ture;
              $_SESSION['cemailErr']="Confirm email didnot match";
           }
  }  
             
        

    
            $contact = input_data($_POST["contact"]);  
            // check if URL address syntax is valid  
            if (contact($_POST['contact'])==true ) 
            {
            	
                $_SESSION['contactErr']= "Only 10 digit and number are allowed";  
                $contactErr=true;
            }      
      

    
        $password = input_data($_POST["password"]);  


      if(password($_POST['password'])==true)   
            
         {
                $_SESSION['passwordErr'] = "Passowrd must be atleast 6 ,one uppercase and number";  
                $passwordErr=true;
       }
     

       

       if(isset($edit))
       {

        if($fnameErr==true || $lnameErr==true || $addressErr==true ||  $passwordErr==true || $contactErr==true)  
       {
       	 header("location:teacher.php?type=edit&&id=$id");
       	 exit();
       }
      }

      else
      {  
      	  if($fnameErr==true || $lnameErr==true || $addressErr==true || $emailErr==true || $passwordErr==true || $contactErr==true || $cemailErr==true)  
       {
       	 header("location:teacher.php");
       	 exit();
       }

      }




?>