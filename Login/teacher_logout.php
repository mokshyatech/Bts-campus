<?php

session_start();
if(isset($_SESSION['login_as_teacher']))
{
	unset($_SESSION['teacher']);
	unset($_SESSION['teacher_id']);
	unset($_SESSION['login_as_teacher']);
	header('location:login.php?user=teacher');
}

?>