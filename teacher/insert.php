<?php
session_start();
error_reporting(0);
include('../include/connection.php');
	
  if(isset($_POST['submit']))
   {
       if(!is_dir('photo'))
       {
            mkdir('photo');
       }
       if(!is_dir('pdf'))
       {
       	mkdir('pdf');
       }
   	
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
	else{ $loopcount1=0;
		   $loopcount2=0;
		$handle=fopen($fileTmpName,'r');
		while(($myData=fgetcsv($handle,1000,','))!==FALSE)
		  {
             if ( is_null($myData[0]) && is_null($myData[1]) && is_null($myData[2])&& is_null($myData[3])&& is_null($myData[4])&& is_null($myData[5])&& is_null($myData[6]) && is_null($myData[7]))
		    {
                continue;
            }

		  	$count=count($myData);
		  	if($count==8)
		  	{
             $loopcount1++;
		  	$uniquecode=$myData[0];
			$subject=$myData[1];
			$full_marks=$myData[2];
			$pass_marks=$myData[3];
			$marks=$myData[4];
			$faculty=$myData[5];
			$year=$myData[6];
			$term=$myData[7];

			 $sql="select * from results where uniquecode='$uniquecode' and subject='$subject' and term='$term' and year='$year' and faculty='$faculty' ";
            $result = mysqli_query($db, $sql);
            $count2=mysqli_num_rows($result);

            if($count2>0)
              {
              	
              	 $sql="UPDATE results SET marks='$marks',full_marks='$full_marks',pass_marks='$pass_marks',updated_at='$created_at'  WHERE uniquecode='$uniquecode' and subject='$subject' and term='$term' and year='$year' and faculty='$faculty' ";
                  $query1 = mysqli_query($db, $sql);

              }
              else
              {
              	
              	 $sql1="insert into results(uniquecode,subject,full_marks,pass_marks,marks,faculty,year,term,posted_by,created_at) 
			                          values('$uniquecode','$subject','$full_marks','$pass_marks','$marks','$faculty','$year','$term','$posted_by','$created_at')";
			     $query1=mysqli_query($db,$sql1);

              }

		  	}
		  	else
		  	{


              $loopcount2++;
		  	}
			
		  }

		if(!$query1){
			
			$_SESSION['error']='error in uploading';
			header('location:result.php');

		            }
		else{    

			if($loopcount1>1)
		   	 {
               $_SESSION['success']=$loopcount1.'  rows have been changed or added successfully';
		   	 }
		   	 else
		   	 {
                $_SESSION['success']=$loopcount1.'  row has been changed or added successfully';
		   	 }
			
         
			  if(($loopcount2)>0)
		   {
		   	 if($loopcount2>1)
		   	 {
               $_SESSION['error']=($loopcount2).' rows are incorret in your csv plz check it';
		   	 }
		   	 else
		   	 {
                 $_SESSION['error']=($loopcount2).' row is incorret in your csv plz check it';
		   	 }
		   	

		   }
		    
            
			header('location:result.php');
			exit();

		    }
		}
	}
	
	?>








