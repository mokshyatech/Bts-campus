<?php
session_start();
include('include/connection.php');
	
  if(isset($_POST['submit']))
   {
   	
   	  if(isset($_POST['school']))
   	  {
	 if($_POST['school']=='Yes'){
         $school=1;
        }
        else{
         $school=0;
        }
    }
    else
    {
       $school=0;
    }
  
   if(isset($_POST['plus2']))
   {
     if($_POST['plus2']=='Yes'){
         $plus2=1;
        }
        else{
         $plus2=0;
        }
    }
    else
    {
          $plus2=0;
    }

    if(isset($_POST['engineering']))
   {
     if($_POST['engineering']=='Yes'){
         $engineering=1;
        }
        else{
         $engineering=0;
        }
     }
     else
     {
     	$engineering=0;
     }

	$caption=$_POST['caption'];
	

	 
	 $image=$_FILES['image']['name'];
	

	 $temp=$_FILES['image']['tmp_name'];
	
	 $dir="photo/".$image;
	
	 move_uploaded_file($temp, $dir);

	
	 

	 $sql="insert into photos(caption,photo,school,plus2,engineering)
	    values('$caption','$image',$school,$plus2,$engineering)";
	   


	    if( $query=mysqli_query($db,$sql))
	   {
	   	  $_SESSION['success']='uploaded successfuly';
           header('location:gallery_table.php');
	   }
	   else
	   {
	   	 $_SESSION['error']='opps somthing went wrong';
	   	  header('location:gallery_table.php');
	   }
	   
}


  if(isset($_POST['update']))
  {
  	  $id=$_POST['id'];

  	if(isset($_POST['school']))
   	  {
	 if($_POST['school']=='Yes'){
         $school=1;
        }
        else{
         $school=0;
        }
    }
    else
    {
       $school=0;
    }
  
   if(isset($_POST['plus2']))
   {
     if($_POST['plus2']=='Yes'){
         $plus2=1;
        }
        else{
         $plus2=0;
        }
    }
    else
    {
          $plus2=0;
    }

    if(isset($_POST['engineering']))
   {
     if($_POST['engineering']=='Yes'){
         $engineering=1;
        }
        else{
         $engineering=0;
        }
     }
     else
     {
     	$engineering=0;
     }

	$caption=$_POST['caption'];
	

	
	
	 

	 $sql="UPDATE  photos set caption='$caption',school='$school',plus2='$plus2',engineering='$engineering' where id='$id' ";
	   


	    if( $query=mysqli_query($db,$sql))
	   {
	   	  $_SESSION['success']='photo has been Edited successfuly';
           header('location:gallery_table.php');
           exit();
	   }
	   else
	   {
	   	 $_SESSION['error']='opps somthing went wrong';
	   	  header('location:gallery_table.php');
	   	  exit();
	   }
  }


  if(isset($_GET['delete']))
  {
  	 $id=$_GET['id'];
  	 $sql="DELETE from photos where id='$id'";
	   


	    if( $query=mysqli_query($db,$sql))
	   {
	   	  $_SESSION['success']='image has been deleted successfuly';
           header('location:gallery_table.php');
	   }
	   else
	   {
	   	 $_SESSION['error']='opps somthing went wrong';
	   	  header('location:gallery_table.php');
	   }
      
  }

?>

