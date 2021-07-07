<?php
session_start();

  if(isset($_SESSION['admin_login']))
  { 	   
            unset($_SESSION['username']);
			unset($_SESSION['admin_login']);
			unset($_SESSION['admin_login_time']);
		    header("location:index.php");
		      }
           

?>
