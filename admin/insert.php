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
   	  $NewsAndEvent=mysqli_real_escape_string($db,$_POST['NewsAndEvent']);
      $created_at=date('Y-m-d');


      $image=$_FILES['image'];


      if(!is_dir("news_and_announcement_file"))
      {
         mkdir("news_and_announcement_file");
      }     
     $image=$_FILES['image']['name'];
     $temp=$_FILES['image']['tmp_name']; 
     $dir="news_and_announcement_file/".$image;
     $fileExtension=pathinfo($image,PATHINFO_EXTENSION);
     $allowedType=array('png','jpg','jpeg');
     if($image!=null){
     if (!in_array($fileExtension,$allowedType)){
            echo "invalid file extension";
            $_SESSION['error_image']="invalide file extension";
            header("location:news-&-event.php?type=insert") ;
            exit();
   }
    }
     move_uploaded_file($temp, $dir);   
   	  $sql="insert into news_and_event (post,description,date,created_at,image) values('$post','$NewsAndEvent','$date','$created_at','$image') ";
   	   

   	  if(mysqli_query($db,$sql))
   	  {
   	  	$_SESSION['success']='Event and post has been successfully posted';
   	  	 	
   	  	header('location:news-and-events-table.php');
   	 
   	  }
   	  else
   	   {
   	  	$_SESSION['error']='!Opps somthing wrong in posting event and news';
   	    	  	header('location:news-and-events-table.php');
   	 

   	  }
   	  


   }

   if(isset($_POST['news_and_event_edit']))
   {
       $id=$_POST['id'];
      $post= $_POST['title'];
      $date = $_POST['date'];
       $NewsAndEvent=mysqli_real_escape_string($db,$_POST['NewsAndEvent']);
      $updated_at=date("Y-m-d");
     $sql="update news_and_event set post='$post' ,description='$NewsAndEvent' ,date='$date', updated_at='$updated_at' where id='$id' ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Event and post has been successfully updated';
          
        header('location:news-and-events-table.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in posting event and news';
              header('location:news-and-events-table.php');
     

      }
      


   }
   /*----------------------------------------------------------------------------------------------------------------------------
                                                  notice section        
      ----------------------------------------------------------------------------------------------------------------------*/
         if(isset($_POST['notice_insert']))
   {
     
     
    $date=date("Y-m-d");
    $notice=mysqli_real_escape_string($db,$_POST['notice']);
    if(!is_dir("notice_file")){
         mkdir("notice_file");
      }
   $title= $_POST['title'];
   $image=$_FILES['image']['name'];
   $temp=$_FILES['image']['tmp_name'];  
   $dir="notice_file/".$image;
   $fileExtension=pathinfo($image,PATHINFO_EXTENSION);
   $allowedType=array('png','jpg','jpeg');
   if($image!=null){
     if (!in_array($fileExtension,$allowedType)){
            echo "invalid file extension";
            $_SESSION['error_image']="invalide file extension";
            header("location:notices.php?type=insert") ;
            exit();
         }
    }
     move_uploaded_file($temp, $dir);
    $sql="insert into notice (title,image,notice,created_at) values('$title','$image','$notice','$date') ";
      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Notice has been successfully posted';
          
        header('location:notice_table.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in posting event and news';
             header('location:notice_table.php');
     

      }
      


   }


    if(isset($_POST['notice_update']))
   {
     $id=$_POST['id'];
      $notice=mysqli_real_escape_string($db,$_POST['notice']);
       
       $updated_at=date("Y-m-d");

       $title= $_POST['title'];
      $sql="UPDATE notice  SET notice='$notice',updated_at='$updated_at',title='$title' where id='$id' ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='notices has been updated successfully';
          
        header('location:notice_table.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in updating in notice';
              header('location:notice_table.php');
     

      }
      


   }

   
   /*----------------------------------------------------------------------------------------------------------------------------
                                                  calender event section        
      ----------------------------------------------------------------------------------------------------------------------*/
       if(isset($_POST['insert_event']))
   {
       $event=$_POST['event'];
      $date=$_POST['date'];
      $created_at=date("Y-m-d");


       



      $sql="insert into calender (event,date,created_at) values('$event','$date','$created_at')";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Calender Event has been successfully posted';
         header('location:event_table.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in posting event and news';
                 header('location:event_table.php');
     

      }
    
   }

   if(isset($_POST['update_event']))
   {
       $id=$_POST['id'];
       $event=$_POST['event'];
      $date=$_POST['date'];
       $updated_at=date("Y-m-d");


      


      $sql="update calender  SET event='$event',date='$date',updated_at='$updated_at' WHERE id='$id' ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']=' Calender Event has been successfully updated';
          
        header('location:event_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in Calender Event';
              header('location:event_table.php');
     

      }
   }

   
   /*----------------------------------------------------------------------------------------------------------------------------
                                                   Gallery section        
      ----------------------------------------------------------------------------------------------------------------------*/
       if(isset($_POST['gallery_insert']))
   {
    
   

   

  $created_at=date("Y-m-d");
  

   
   $image=$_FILES['image']['name'];
  

   $temp=$_FILES['image']['tmp_name'];
  
   $dir="photo/".$image;
  
   move_uploaded_file($temp, $dir);


   $sql="insert into photos(photo,created_at)
      values('$image','$created_at')";
     


      if( $query=mysqli_query($db,$sql))
     {
        $_SESSION['success']='uploaded successfuly';
           header('location:gallery_table.php');
     }
     else
     {
       $_SESSION['error']='opps somthing went wrong';
        header('location:gallery_table.php');
     }
     
}




  if(isset($_GET['gallery_delete']))
  {
     $id=$_GET['id'];
     $sql="DELETE from photos where id='$id'";
     


      if( $query=mysqli_query($db,$sql))
     {
        $_SESSION['success']='image has been deleted successfuly';
           header('location:gallery_table.php');
     }
     else
     {
       $_SESSION['error']='opps somthing went wrong';
        header('location:gallery_table.php');
     }
      
  }


 /*----------------------------------------------------------------------------------------------------------------------------
                               teacher register and edit section 
 ---------------------------------------------------------------------------------------------------------------------------
 */

 if(isset($_POST['teacher_insert']))
 {
     include('teacher_registration/old_data.php');
     include('teacher_registration/global_validate.php');
     include('teacher_registration/validate.php');
     $created_at=date("Y-m-d");
      
        $sql="INSERT INTO teacher(firstname,lastname,address,email,phone,password,created_at) VALUES('$fname', '$lname', '$address', '$email', '$contact', '$password','$created_at')"; 

     if(mysqli_query($db,$sql))
     {
      $_SESSION['success']=" New teacher ".$fname." ".$lname ." is added successfully";
             include('teacher_registration/clear_old_data.php');

            header('location:teacher_table.php'); 

     }
     else
     {
       $_SESSION['error']=" ".$fname." ".$lname ." cannot added something went wrong";
        header('location:teacher_table.php'); 


     }

 }

 if(isset($_POST['teacher_edit']))
 {
     $edit='set';
     $id=$_POST['id'];

     include('teacher_registration/old_data.php');
     include('teacher_registration/global_validate.php');
     include('teacher_registration/validate.php');
     $updated_at=date("Y-m-d");

         $sql="UPDATE  teacher SET firstname='$fname',lastname='$lname' ,address='$address',phone='$contact',password='$password',updated_at='$updated_at' where id='$id' "; 

     if(mysqli_query($db,$sql))
     {
           include('teacher_registration/clear_old_data.php');
           $_SESSION['success']="Informaton of ".$email." is edited successfully";
           

            header('location:teacher_table.php'); 

     }
     else
     {
       $_SESSION['error']="Informaton of ".$email." is not edited!! somthing went wrong";
           

            header('location:teacher_table.php'); 

     }
        


 }
  /*----------------------------------------------------------------------------------------------------------------------------
                               student insert and edit  section 
 ---------------------------------------------------------------------------------------------------------------------------
 */
  if(isset($_POST['student_insert']))
 {
     include('student_registration/old_data.php');
     include('teacher_registration/global_validate.php');
     include('student_registration/validate.php');
     $faculty=$_POST['faculty'];
     $batch=$_POST['batch'];
     $created_at=date("Y-m-d");
       if(mysqli_query($db,"INSERT INTO  student(firstname,lastname,address,fathername,phone,password,uniquecode,faculty,dob,created_at,batch) VALUES('$fname', '$lname', '$address', '$fathername', '$contact', '$password','$uniquecode','$faculty','$dob','$created_at','$batch')"))
       {
         include('student_registration/clear_old_data.php');
        $_SESSION['success']="you have successfully insert student data";  
        header('location:student_table.php');     
       } 
       else
       {
        $_SESSION['error']="opps somthing went worng";
          header('location:student_table.php');   
       }

 }

 if(isset($_POST['student_edit']))
 {
   $edit='set';
   $id=input_data($_POST['uniquecode']);

    include('student_registration/old_data.php');
     include('teacher_registration/global_validate.php');
     include('student_registration/validate.php');
      $updated_at=date("Y-m-d");
       $faculty=$_POST['faculty'];
        $batch=$_POST['batch'];

     $sql="update student set firstname='$fname', lastname='$lname' ,address='$address',fathername='$fathername',phone='$contact',password='$password',dob='$dob',updated_at='$updated_at' ,faculty='$faculty',batch='$batch'  where uniquecode='$id' ";

      if(mysqli_query($db,$sql))
      {
         $_SESSION['success']="Informaton of uniquecode=".$uniquecode." has been successfully edited";
        header('location:student_table.php'); 
       
      }
      else
      {
        $_SESSION['error']="Informaton of uniquecode=".$uniquecode." has not edited somthing went wrong";
        header('location:student_table.php'); 

      }
      
 }

  /*----------------------------------------------------------------------------------------------------------------------------
                               student insert and edit  section 
 ---------------------------------------------------------------------------------------------------------------------------
 */



?>