<?php
   session_start();

  include('include/connection.php');

  

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
} 



   if(isset($_POST['news_and_event_insert']))
   {
      $post= $_POST['title'];
      $date = $_POST['date'];
   	  $NewsAndEvent=$_POST['NewsAndEvent'];
        if($_POST['school']=='Yes'){
         $school=1;
        }
        else{
         $school=0;
        }
        if($_POST['plus2']=='Yes'){
         $plus2=1;
        }
        else{
         $plus2=0;
        }
        if($_POST['engineering']=='Yes'){
         $engineering=1;
        }
        else{
         $engineering=0;
        }



   	  $sql="insert into news_and_event (post,description,date,school,plus2,engineering) values('$post','$NewsAndEvent','$date',$school,$plus2,$engineering) ";
   	   

   	  if(mysqli_query($db,$sql))
   	  {
   	  	$_SESSION['success']='Event and post has been successfully posted';
   	  	 	
   	  	header('location:news and events_table.php');
   	 
   	  }
   	  else
   	   {
   	  	$_SESSION['error']='!Opps somthing wrong in posting event and news';
   	    	  	header('location:news_&_event.php');
   	 

   	  }
   	  


   }

   if(isset($_POST['news_and_event_edit']))
   {



       $id=$_POST['id'];
      $post= $_POST['title'];
      $date = $_POST['date'];
      $NewsAndEvent=$_POST['NewsAndEvent'];
        if($_POST['school']=='Yes'){
         $school=1;
        }
        else{
         $school=0;
        }
        if($_POST['plus2']=='Yes'){
         $plus2=1;
        }
        else{
         $plus2=0;
        }
        if($_POST['engineering']=='Yes'){
         $engineering=1;
        }
        else{
         $engineering=0;
        }



      $sql="update news_and_event set post='$post' ,description='$NewsAndEvent' ,date='$date',school='$school',plus2='$plus2',engineering='$engineering' where id='$id' ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Event and post has been successfully updated';
          
        header('location:news and events_table.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in posting event and news';
              header('location:news and events_table.php');
     

      }
      


   }


   if(isset($_POST['stu_registration']))
   {   

       include('school_student_registration/old_data.php');
       include('school_student_registration/validate.php');



       if(mysqli_query($db,"INSERT INTO school(firstname,lastname,address,fathername,contact,password,uniquecode,dob) VALUES('$fname', '$lname', '$address', '$fathername', '$contact', '$password','$uniquecodeS','$dob')"))
       {
         include('school_student_registration/clear_old_data.php');
        $_SESSION['success']="you have successfully insert student data";  
        header('location:school_stu_registration_table.php');     
       } 
       else
       {
        $_SESSION['error']="opps somthing went worng";
       }

        



   }
    if(isset($_POST['stu_registration_edit']))
   {
       
       $uniquecode=$_POST['uniquecode'];
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $address=$_POST['address'];
       $password=$_POST['password'];
       $dob=$_POST['dob'];
      $contact=$_POST['contact'];
      $fathername=$_POST['fathername'];

      $sql="update school set firstname='$fname', lastname='$lname' ,address='$address',fathername='$fathername',contact='$contact',password='$password',dob='$dob'   where uniquecode='$uniquecode' ";

      if(mysqli_query($db,$sql))
      {
         $_SESSION['success']="Informaton of uniquecode=".$uniquecode." has been successfully edited";
        header('location:school_stu_registration_table.php'); 
       
      }
      else
      {
        $_SESSION['error']="Informaton of uniquecode=".$uniquecode." has not edited somthing went wrong";
        header('location:school_stu_registration_table.php'); 

      }
      }


  if(isset($_POST['school_teacher_insert']))
  {
      include('school_teacher_registration/old_data.php');
      include('school_teacher_registration/validate.php');
   
      $sql="INSERT INTO school_teacher(firstname,lastname,address,email,phone,password) VALUES('$fname', '$lname', '$address', '$email', '$contact', '$password')"; 

     if(mysqli_query($db,$sql))
     {
      $_SESSION['success']=" New teacher".$fname." ".$lname ." is added successfully";
             include('school_teacher_registration/clear_old_data.php');

            header('location:school_teacher_registration_table.php'); 

     }
     else
     {
       $_SESSION['error']=" ".$fname." ".$lname ." cannot added something went wrong";
        header('location:school_teacher_registration_table.php'); 


     }


  }

  if(isset($_POST['school_teacher_edit']))
  {
       $edit='set';
       $id=$_POST['id'];
       $email=$_POST['email'];
       include('school_teacher_registration/validate.php');

        $sql="UPDATE  school_teacher SET firstname='$fname',lastname='$lname' ,address='$address',phone='$contact',password='$password' where id='$id' "; 

     if(mysqli_query($db,$sql))
     {
      $_SESSION['success']="Informaton of ".$email." is edited successfully";
           

            header('location:school_teacher_registration_table.php'); 

     }
     else
     {
       $_SESSION['error']="Informaton of ".$email." is not edited!! somthing went wrong";
           

            header('location:school_teacher_registration_table.php'); 

     }
 }
 
 //engineering  student registration and  engineerign teacher registration

 if(isset($_POST['engineering_stu_registration']))
 {
    include('engineering_student_registration/old_data.php');
    include('engineering_student_registration/validate.php');

     if(mysqli_query($db,"INSERT INTO engineering(firstname,lastname,address,fathername,phone,password,uniquecode,dob) VALUES('$fname', '$lname', '$address', '$fathername', '$contact', '$password','$uniquecodeS','$dob')"))
       {
         include('engineering_student_registration/clear_old_data.php');
        $_SESSION['success']="you have successfully insert student data";  
        header('location:engineering_student_registration_table.php');     
       } 
       else
       {
        $_SESSION['error']="opps somthing went worng";
       }


 }


 if(isset($_POST['engineering_stu_registration_edit']))
{
     $uniquecode=$_POST['uniquecode'];
     $edit='set';
    include('engineering_student_registration/validate.php');

  
   
   $sql="update engineering set firstname='$fname', lastname='$lname' ,address='$address',fathername='$fathername',phone='$contact',password='$password',dob='$dob'   where uniquecode='$uniquecode' ";

      if(mysqli_query($db,$sql))
      {
         $_SESSION['success']="Informaton of uniquecode=".$uniquecode." has been successfully edited";
        header('location:engineering_student_registration_table.php'); 
       
      }
      else
      {
        $_SESSION['error']="Informaton of uniquecode=".$uniquecode." has not edited somthing went wrong";
        header('location:engineering_student_registration_table.php'); 

      }
}

if(isset($_POST['engineering_teacher_insert']))
 {
   include('engineering_teacher_registration/old_data.php');
   include('engineering_teacher_registration/validate.php');

      $sql="INSERT INTO engineering_teacher(firstname,lastname,address,email,contact,password) VALUES('$fname', '$lname', '$address', '$email', '$contact', '$password')"; 

     if(mysqli_query($db,$sql))
     {
      $_SESSION['success']=" New teacher ".$fname." ".$lname ." is added successfully";
             include('engineering_teacher_registration/clear_old_data.php');

            header('location:engineering_teacher_registration_table.php'); 

     }
     else
     {
       $_SESSION['error']=" ".$fname." ".$lname ." cannot added something went wrong";
        header('location:school_teacher_registration_table.php'); 


     }


 }


 if(isset($_POST['engineering_teacher_edit']))
 {
       $edit='set';
       $id=$_POST['id'];
       $email=$_POST['email'];
      include('engineering_teacher_registration/old_data.php');
      include('engineering_teacher_registration/validate.php');

     $sql="UPDATE  engineering_teacher SET firstname='$fname',lastname='$lname' ,address='$address',contact='$contact',password='$password' where id='$id' "; 

     if(mysqli_query($db,$sql))
     {
           include('engineering_teacher_registration/clear_old_data.php');
           $_SESSION['success']="Informaton of ".$email." is edited successfully";
           

            header('location:engineering_teacher_registration_table.php'); 

     }
     else
     {
       $_SESSION['error']="Informaton of ".$email." is not edited!! somthing went wrong";
           

            header('location:engineering_teacher_registration_table.php'); 

     }

 }

 if(isset($_POST['collage_student_insert']))
 {
     include('collage_student_registration/old_data.php');
     include('collage_student_registration/global_validate.php');
     include('collage_student_registration/validate.php');


       if(mysqli_query($db,"INSERT INTO  college(firstname,lastname,address,fathername,phone,password,uniquecode,dob) VALUES('$fname', '$lname', '$address', '$fathername', '$contact', '$password','$uniquecode','$dob')"))
       {
         include('collage_student_registration/clear_old_data.php');
        $_SESSION['success']="you have successfully insert student data";  
        header('location:collage_student_registration_table.php');     
       } 
       else
       {
        $_SESSION['error']="opps somthing went worng";
       }

 }

 if(isset($_POST['collage_student_edit']))
 {
   $edit='set';
   $id=input_data($_POST['uniquecode']);

    include('collage_student_registration/old_data.php');
     include('collage_student_registration/global_validate.php');
     include('collage_student_registration/validate.php');

     $sql="update college set firstname='$fname', lastname='$lname' ,address='$address',fathername='$fathername',phone='$contact',password='$password',dob='$dob'   where uniquecode='$id' ";

      if(mysqli_query($db,$sql))
      {
         $_SESSION['success']="Informaton of uniquecode=".$uniquecode." has been successfully edited";
        header('location:collage_student_registration_table.php'); 
       
      }
      else
      {
        $_SESSION['error']="Informaton of uniquecode=".$uniquecode." has not edited somthing went wrong";
        header('location:collage_student_registration_table.php'); 

      }
      
 }

 if(isset($_POST['collage_teacher_insert']))
 {
     include('collage_teacher_registration/old_data.php');
     include('collage_student_registration/global_validate.php');
     include('collage_teacher_registration/validate.php');
      
        $sql="INSERT INTO college_teacher(firstname,lastname,address,email,phone,password) VALUES('$fname', '$lname', '$address', '$email', '$contact', '$password')"; 

     if(mysqli_query($db,$sql))
     {
      $_SESSION['success']=" New teacher ".$fname." ".$lname ." is added successfully";
             include('collage_teacher_registration/clear_old_data.php');

            header('location:collage_teacher_registration_table.php'); 

     }
     else
     {
       $_SESSION['error']=" ".$fname." ".$lname ." cannot added something went wrong";
        header('location:collage_teacher_registration_table.php'); 


     }

 }

 if(isset($_POST['collage_teacher_edit']))
 {
     $edit='set';
     $id=$_POST['id'];

     include('collage_teacher_registration/old_data.php');
     include('collage_student_registration/global_validate.php');
     include('collage_teacher_registration/validate.php');

         $sql="UPDATE  college_teacher SET firstname='$fname',lastname='$lname' ,address='$address',phone='$contact',password='$password' where id='$id' "; 

     if(mysqli_query($db,$sql))
     {
           include('collage_teacher_registration/clear_old_data.php');
           $_SESSION['success']="Informaton of ".$email." is edited successfully";
           

            header('location:collage_teacher_registration_table.php'); 

     }
     else
     {
       $_SESSION['error']="Informaton of ".$email." is not edited!! somthing went wrong";
           

            header('location:collage_teacher_registration_table.php'); 

     }
        


 }



?>