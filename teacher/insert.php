<?php
session_start();
include('../include/connection.php');
	
  if(isset($_POST['submit']))
   {
// $allowedExts = array(
//   "pdf", 
//   "doc", 
//   "docx"
//   ); 

// $allowedMimeTypes = array( 
//   'application/msword',
//   'application/pdf'
// );

// $extension = end(explode(".", $_FILES["pdf"]["name"]));


// if ( ! ( in_array($extension, $allowedExts ) ) ) {
//   die('Please provide another file type .');
// }

// if ( in_array( $_FILES["pdf"]["type"], $allowedMimeTypes ) ) 
// {   
 
    
 
// }
// else
// {


// }

   	
	$caption=$_POST['caption'];
	$year=$_POST['year'];
	$faculty=$_POST['faculty'];
	$subject ="sdfs";
	$created_at=date("Y-m-d");
	$posted_by=$_SESSION['teacher_id'];
	

	 
	 $image=$_FILES['image']['name'];
	 $temp=$_FILES['image']['tmp_name'];
	 $dir="photo/".$image;
	 move_uploaded_file($temp, $dir);
 	
 	 $pdf=$_FILES['pdf']['name'];
 	 $temp1=$_FILES['pdf']['tmp_name'];
     $dir1="pdf/".$pdf;
 	 move_uploaded_file($temp1, $dir1);
	
	// echo "image=>".$image."<br>pdf=>".$pdf."<br>subject=>".$subject."<br>year=>".$year."<br>faculty=>".$faculty."<br>created_at=>".$created_at."<br>posted_by=>".$posted_by."<br>caption=>".$caption;
	 

	 $sql="insert into resources(posted_by,image,pdf,year,subject,faculty,created_at,caption)
	    values('$posted_by','$image','$pdf','$year','$subject','$faculty','$created_at','$caption') ";
	    

if(mysqli_query($db,$sql)){
			
			$_SESSION['success']='RESOURCE HAS BEEN POSTED SUCCESFULLY';
			header('location:resources.php');
	
			
		            }
		else{
			$_SESSION['error']='error in uploading';
			header('location:resources.php');

		
		    }
		}
	
	?>








