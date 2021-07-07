<?php 
 


  if(isset($_SESSION['login_as_teacher']))
  {
    header("location:teacher/index.php");
  }

  if(isset($_SESSION['login_as_student']))
  {
    $expire_time =1*60*60; //session expire time
   if( $_SESSION['login_time'] < (time()-$expire_time)) {
    
       $_SESSION['alert']=true;
       
        header("location:login/student_logout.php");  
    }
  else {
      $_SESSION['login_time'] = time(); 
   }

  }

  

 ?>