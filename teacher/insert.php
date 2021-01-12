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
	if(isset($_POST['subject']))
	{
    	$subject =$_POST['subject'];
	}
	else
	{
        	$subject ="no subject";
	}

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

 if(isset($_POST['insert_csv']))
   {
   	


	  $fileName=$_FILES['csv']['name'];
	

	 $fileTmpName=$_FILES['csv']['tmp_name'];
	 	$posted_by=$_SESSION['teacher_id'];
	 	$created_at=date("Y-m-d");


	 $fileExtension=pathinfo($fileName,PATHINFO_EXTENSION);
		
	 $allowedType=array('csv');
	 if (!in_array($fileExtension,$allowedType))
	 {
	 	 $_SESSION['error']='invalid file format';
	 	header("location:result.php");
	 }
	else{
		$handle=fopen($fileTmpName,'r');
		while(($myData=fgetcsv($handle,1000,','))!==FALSE)
		  {
			$uniquecode=$myData[0];
			$subject=$myData[1];
			$full_marks=$myData[2];
			$pass_marks=$myData[3];
			$marks=$myData[4];
			$faculty=$myData[5];
			$year=$myData[6];
			$term=$myData[7];
			
			
			$sql1="insert into results(uniquecode,subject,full_marks,pass_marks,marks,faculty,year,term,posted_by,created_at) 
			                          values('$uniquecode','$subject','$full_marks','$pass_marks','$marks','$faculty','$year','$term','$posted_by','$created_at')";
			$query1=mysqli_query($db,$sql1);

			  // $last_id = mysqli_insert_id($db);
			
		  }
		 
		if(!$query1){
			
			$_SESSION['error']='error in uploading'.mysql_error();
			header('location:result.php');

		            }
		else{?>
			
			<?php
			$_SESSION['success']='RESULT HAS BEEN POSTED SUCCESFULLY';
			header('location:result.php');

		    }
		}
	}
	
	?>








