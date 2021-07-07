<?php
session_start(); 
$type=$_GET['type'];
$id=$_GET['id'];

include('../../include/connection.php');
  if($type=='resources')
  {
    $sql="select *from resources where id='$id' limit 1";

     $result=mysqli_fetch_assoc(mysqli_query($db,$sql));
     if(file_exists('../pdf/'.$result['pdf']))
     {
       unlink('../pdf/'.$result['pdf']);	
     }

     if(file_exists('../photo/'.$result['image']))
     {
       unlink('../photo/'.$result['image']);
     }
     mysqli_query($db,"delete from resources where id='$id'" );
     $_SESSION['success']="Deleted successfully ";
     header('location:../mypost.php');
  }

 ?>