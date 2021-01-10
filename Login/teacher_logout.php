<?php

session_start();
if(isset($_SESSION['teacher']))
{
	unset($_SESSION['teacher']);
	unset($_SESSION['teacher_id']);
	header('location:../index.php');
}

?>