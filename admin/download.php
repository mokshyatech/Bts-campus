<?php
session_start();
include('include/connection.php');

include('include/check_login.php');

  $id=$_GET['id'];
  $faculty=$_GET['faculty'];
  $type=$_GET['type'];


  if($faculty=='management')
  {
     $sql="select * from admission where id='$id' limit 1";
    $result=mysqli_query($db,$sql);
    $admission=mysqli_fetch_assoc($result);
  
    $file=$admission['slcgrade'];
    $file1=$admission['slccharacter'];
    $file2=$admission['pp'];
      $path='../+2/admission/photo/'.$file;
      $path1='../+2/admission/photo/'.$file1;
      $path2='../+2/admission/photo/'.$file2;


    if($type=='slcgradesheet')
    {

    if(!empty($file) && file_exists($path))
    {
      
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file");
      header("Content-Type:application/zip");
      header("Content-Transfer-Emcoding:binary");
      readfile($path);
    }
   }

    if($type=='slccharacter')
   {
    if(!empty($file1) && file_exists($path1))
    {
    
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file1");
      header("Content-Type:application/zip");
      header("Content-Transfer-Emcoding:binary");
      readfile($path1);
    }
   }
    if($type=='pp')

   {
    if(!empty($file2) && file_exists($path2))
    {
    	
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file2");
      header("Content-Type:application/zip");
      header("Content-Transfer-Emcoding:binary");
      readfile($path2);
    }
   }
    
   
    

  }

  if ($faculty=='engineering')
  {
   $sql="select * from engineeringadmission where id='$id' limit 1";
   $result=mysqli_query($db,$sql);
   $admission=mysqli_fetch_assoc($result);
    $file=$admission['slcgrade'];
    $file1=$admission['slccharacter'];
    $file2=$admission['birthcert'];
    $file3=$admission['entrance'];
    $file4=$admission['recommendation'];
    $file5=$admission['resultcopy'];
    $file6=$admission['pp'];
 

      $path='../engineering/admission/Photo/'.$file;
      $path1='../engineering/admission/Photo/'.$file1;
      $path2='../engineering/admission/Photo/'.$file2;
      $path3='../engineering/admission/Photo/'.$file3;
      $path4='../engineering/admission/Photo/'.$file4;
      $path5='../engineering/admission/Photo/'.$file5;
      $path6='../engineering/admission/Photo/'.$file6;


      if($type=='slcgradesheet')
      {
      	 if(!empty($file) && file_exists($path))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path);
       }
      }

      if($type=='slccharacter')
     {
     	     	 if(!empty($file1) && file_exists($path1))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file1");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path1);
       }
     }

      if($type=='citizenship')
     {
     	   	 if(!empty($file) && file_exists($path))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file2");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path2);
       }
     }

     if($type=='admit_card')
     {
     	   	 if(!empty($file3) && file_exists($path3))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file3");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path3);
       }
     }

     if($type=='letter')
     {
     	  if(!empty($file4) && file_exists($path4))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file4");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path4);
       }
     }

     if($type=='result_copy')
     {
     	 if(!empty($file5) && file_exists($path5))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file5");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path5);
       }
     }

     if($type=='pp')
     {
     	   	 if(!empty($file6) && file_exists($path6))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file6");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path6);
       }
     }      	
 
         




  }

  if($faculty=='school')

  {
      $sql="select * from admission_school where id='$id' limit 1";
    $result=mysqli_query($db,$sql);
    $admission=mysqli_fetch_assoc($result);
  
    $file=$admission['prev_class_gradesheet'];
    $file2=$admission['birth_certificate'];
    $file3=$admission['pp'];
      $path='../admission/file/'.$file;
      $path2='../admission/file/'.$file2;
      $path3='../admission/file/'.$file3;
      if($type=='gradesheet')
     {
           if(!empty($file) && file_exists($path))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path);
       }
     }        

       if($type=='birth_certificate')
     {
           if(!empty($file2) && file_exists($path2))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file2");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path2);
       }
     }        


      if($type=='pp')
     {
           if(!empty($file3) && file_exists($path3))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file3");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
     }        
          

  }
}

  echo "Woops!!! Something went wrong file uploaded by student is currupted";
?>