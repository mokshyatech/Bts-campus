<?php


  
         $fnameErr=$lnameErr=$addressErr=$passwordErr=$contactErr=$uniquecodeErr=$fathernameErr=false;
    
        $fname = input_data($_POST["fname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                $_SESSION['fnameErr'] = "Only alphabets and white space are allowed";  
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
  
            $fathername = input_data($_POST["fathername"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[a-zA-Z ]*$/",$fathername)) {
                $_SESSION['fathernameErr'] = "Only alphabets and white space are allowed";  
                $fathernameErr=true;
            }      
    
     
            $contact = input_data($_POST["contact"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[0-9]*$/",$contact) && strlen ($contact) != 10) {
                $_SESSION['contactErr'] = "Only 10 digits are allowed";
                $contactErr=true; 
            }      
    


        $password = input_data($_POST["password"]);  
       $uppercase = preg_match('@[A-Z]@', $password);
       $lowercase = preg_match('@[a-z]@', $password);
       $number    = preg_match('@[0-9]@', $password);
       

      if(!$uppercase || !$lowercase || !$number ||  strlen($password) < 8)   
            
            {
                $_SESSION['passwordErr'] = "Invalid Password";  
                $passwordErr=true;
            }      
  
  if(!isset($edit))
  {
   
            $uniquecodeS = input_data($_POST["uniquecode"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^(CLS)|[0-9]|(-)|[0-9]*$/",$uniquecodeS)) {
                $uniquecodeErr = "Only alphabets and white space are allowed";  
            }

           
            $sql="select *from engineering where uniquecode='$uniquecodeS' ";
            $result=mysqli_query($db,$sql);

            $check=mysqli_num_rows($result);
          
            if($check>0)
             {  
              
                $stu=mysqli_fetch_assoc($result);
                $_SESSION['uniquecodeErr'] = "uniquecode is already assigned to student name ".$stu['firstname']." ".$stu['lastname'];
                $uniquecodeErr=true;  
             } 
             


    
  }
  


  
    $dob = input_data($_POST["dob"]);  
             
                 
   

    if(isset($edit))
    {
       if($fnameErr==true || $lnameErr==true || $addressErr== true || $fathernameErr==true || $passwordErr==true || $contactErr==true )
     {
      header("location:engineering_student_registration.php?type=edit&&id=$uniquecode");
      exit();
     }
    }
    else
    {
       if($fnameErr==true || $lnameErr==true || $addressErr== true || $fathernameErr==true || $passwordErr==true || $contactErr==true || $uniquecodeErr==true)
     {
      header('location:engineering_student_registration.php');
      exit();
     }
    }


   

?>