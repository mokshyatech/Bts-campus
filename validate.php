<?php
    
$error_guardian_contact=$error_mother_contact=$error_mobile=$erro_agree=$error_father_contact=false;
$mobileregex = "/^[6-9][0-9]{9}$/" ;  

if(preg_match($mobileregex, $mobile_no) == 1)
{
	
	
}
else
{
	$error_mobile=true;
	$_SESSION['error_mobile']="mobile number must be 10 digit";
	
}





if(preg_match($mobileregex, $father_contact) == 1)
{
	
}
else
{
	$error_father_contact=true;
	$_SESSION['error_father_contact']="mobile number must be 10 digit";
}
if(preg_match($mobileregex, $mother_contact) == 1)
{
	
}
else
{
	$error_mother_contact=true;
	$_SESSION['error_mother_contact']=" number must be 10 digit";
}
if(preg_match($mobileregex, $guardian_contact) == 1)
{
	
}
else
{
	$error_guardian_contact=true;
	$_SESSION['error_guardian_contact']="number must be 10 digit";
}
 if(!isset($_POST['agreed']))
 {
   $erro_agree=true;
   $_SESSION['agreed']="you must accept terms ";
 }



if($error_guardian_contact==true || $error_mother_contact==true || $error_mobile==true || $erro_agree==true ||$error_father_contact==true  )
{
	header('location:index.php');
	exit();
}


?>