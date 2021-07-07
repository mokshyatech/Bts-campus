<?php
  
 

        $facultyErr= $fnameErr=$lnameErr=$addressErr=$passwordErr=$contactErr=$uniquecodeErr=$fathernameErr=$cuniquecodeErr=false;
    
        
            // check if name only contains letters and wh
         $fname=input_data($_POST['fname']);
         $lname=input_data($_POST['lname']);
         $address=input_data($_POST['address']);
         $password=input_data($_POST['password']);
         $contact=input_data($_POST['contact']);
         $uniquecode=input_data($_POST['uniquecode']);
         $cuniquecode=input_data($_POST['cuniquecode']);
         $fathername=input_data($_POST['fathername']);

             if(name($_POST['fname'])==true)
             {
                $_SESSION['fnameErr'] = "Only alphabets and white space are allowed";  
                $fnameErr=true;
              }
              
   
      
  
             if(name($_POST['lname'])==true)
             {
 
                $_SESSION['lnameErr'] = "Only alphabets and white space are allowed";  
                $lnameErr=true;
            }  
    
           
           if (address($_POST['address'])==true ) 
            {   
                $_SESSION['addressErr'] = "Only alphabets, number and white space are allowed";  
                $addressErr=true;
              }
 
      
    
            if (name($_POST['fathername'])==true) 
             {
                $_SESSION['fathernameErr'] = "Only alphabets and white space are allowed";  
                $fathernameErr=true;
            }      
    
     
          
            // check if URL address syntax is valid  
            if (contact($_POST['contact'])==true ) 
            {
                $_SESSION['contactErr'] = "Only 10 digits and number are allowed";
                $contactErr=true; 
            }      
    



      if(password($_POST['password'])==true )   
            
            {
                $_SESSION['passwordErr'] = "password must be alphaber,uppercase,number and special character";  
                $passwordErr=true;
            }  


     if(!isset($edit))
     {

            if(uniquecodeAlreadyExist($_POST['uniquecode'],'student')==true)
            {
              $_SESSION['uniquecodeErr'] = "uniquecode is already assigned to student ".getNameFromUniquecode($_POST['uniquecode'],'student' );
                $uniquecodeErr=true;  
            } 

            if(uniquecode($_POST['uniquecode'])==true)
            {
              $_SESSION['uniquecodeErr'] = "uniquecode must be alphabet,number";
                $uniquecodeErr=true;  
            }

            if($uniquecode!=$cuniquecode)
            {
              $cuniquecodeErr=true;
              $_SESSION['cuniquecodeErr']="uniquecode didnot match";

            } 
    }    
    if(!isset($_POST['faculty']))
    {
        $_SESSION['facultyErr']="plz select the faculty";
        $facultyErr=true;
    }
  


  
    $dob = input_data($_POST["dob"]);  
             
                 
    
    if(isset($edit))
       {

        if($fnameErr==true || $lnameErr==true || $addressErr==true ||  $passwordErr==true || $contactErr==true ||$fathernameErr==true  || $facultyErr==true)  
       {
         header("location:student.php?type=edit&&id=$id");
         exit();
       }
      }

      else
      {  
          if($fnameErr==true || $lnameErr==true || $addressErr==true || $emailErr==true || $passwordErr==true || $contactErr==true ||$fathernameErr==true || $facultyErr==true ||$uniquecodeErr==true ||$cuniquecodeErr==true )  
       {
         header("location:student.php");
         exit();
       }

      }


   

?>