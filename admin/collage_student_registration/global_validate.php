<?php

 function name($get)

 {
            $fname= input_data($get);
          // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                 
                return true;
            }  

 }


 function password($get)
 {
 	 $password = input_data($get);  
       $uppercase = preg_match('@[A-Z]@', $password);
       $lowercase = preg_match('@[a-z]@', $password);
       $number    = preg_match('@[0-9]@', $password);
       

      if(!$uppercase || !$lowercase || !$number ||  strlen($password) < 8)   
            
            {
                
                return true;
           }      

 }

 function contact($contact)
 {
 	 $contact = input_data($_POST["contact"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[0-9]*$/",$contact) && strlen ($contact) != 10) {
                
                 return true;
            }      
    
 }

 function uniquecodeAlreadyExist($get,$table)
 {include('include/connection.php');

 	         $uniquecode = input_data($get); 
         
            $sql="select *from $table where uniquecode='$uniquecode' ";
            $result=mysqli_query($db,$sql);

            $check=mysqli_num_rows($result);
          
            if($check>0)
             {  
              
                
               
                return true; 
             } 
             

 }

 function uniquecode($get)
 {
 	 $uniquecode = input_data($get);  


            // check if URL address syntax is valid  

            if (!preg_match("/^(CLS)|[0-9]|(-)|[0-9]*$/",$uniquecode)) {
                    
         
               
                return true; 
            }

 }

 function address($get)
 { //only alphabet number and white space
     $address=input_data($get);
     if (!preg_match("/^[a-zA-Z0-9 -_:,]*$/",$address)) {   

                
                return true;
              }
 }

 function emailAlreadyExist($get,$table)
 {
    include('include/connection.php');

      $email = input_data($get);
     $sql="select * from college_teacher where email='$email' limit 1 ";

            $result=mysqli_query($db,$sql);

            $check=mysqli_num_rows($result);
          
            if($check>0)
             {  
               
                
                
                 return true;  
             } 
 }

 function email($get)
 { 
   $email = input_data($get);
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                              
                $emailErr=true;  
           }
 }

 function getNameFromEmail($get,$table)
 {
    include('include/connection.php');  
   $email=input_data($get);
   $sql="select * from $table where email='$email' limit 1 ";

            $result=mysqli_query($db,$sql);
            $teach=mysqli_fetch_assoc($result);
            return  $teach['firstname']." ".$teach['lastname'];
                
         
     
 }

 function getNameFromUniquecode($get,$table)
 {
   include('include/connection.php');
    $uniquecode=input_data($get);
    $sql="select * from $table where uniquecode='$uniquecode' limit 1 ";

            $result=mysqli_query($db,$sql);
            $teach=mysqli_fetch_assoc($result);
            return  $teach['firstname']." ".$teach['lastname'];
                
         

 }




?>