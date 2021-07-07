<?php 

 if(isset($_SESSION['admin_login']))
  {
    $expire_time =10*60; //session expire time
   if( $_SESSION['admin_login_time'] < (time()-$expire_time)) {
    
        $_SESSION['alert']=true;
       
        header("location:logout.php");  
    }
  else {
      $_SESSION['admin_login_time'] = time(); 
   }

  }
  else
  {
    header("location:index.php");
  }
 ?>