<?php

session_start();
if(isset($_SESSION['login_as_student']))
{
	unset($_SESSION['login_user']);
	unset($_SESSION['login_as_student']);
	unset($_SESSION['code']);
	unset($_SESSION['stu_id']);
	unset($_SESSION['payment']);
	
	header('location:login.php?user=student');

}



?>