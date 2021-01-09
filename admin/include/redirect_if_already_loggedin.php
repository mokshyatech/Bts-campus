<?php
 
if(isset($_SESSION['status']))
 if($_SESSION['status']=='ok')
 {
 	header('location:landing.php');
 }

?>