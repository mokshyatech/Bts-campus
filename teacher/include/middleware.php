<?php 
 if(!isset($_SESSION['teacher']))
{

    header("location:../login/login.php?user=teacher");
  }
  else
  {
    $expire_time =10*60; //session expire time
   if( $_SESSION['login_time'] < (time()-$expire_time)) {
    
       $_SESSION['alert']=true;
       
        header("location:../login/teacher_logout.php");  
    }
  else {
      $_SESSION['login_time'] = time(); 
   }    

  }
  if(isset($_SESSION['login_as_student']))
  {
    header("location:../index.php");
  }
  

  

 ?>