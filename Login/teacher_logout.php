<?php

session_start();
if(isset($_SESSION['teacher_user']))
{
	unset($_SESSION['teacher_user']);
	header('location:../index.php');
}

?>